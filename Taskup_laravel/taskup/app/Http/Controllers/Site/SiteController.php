<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;
use App\Models\SitePage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Services\ProfileService;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){


        if( Auth::user() && !Auth::user()->hasRole('admin') ){

            return redirect()->back();
        }
        $page   = SitePage::select('id', 'title', 'description','settings')->where( ['status' => 'publish', 'route' => $request['uri'] ] )->latest()->first();
        if( empty($page) ){
            abort('404');
        }

        $page_id        =  $page->id;
        $title          =  $page->title;
        $pg_description =  $page->description;
        $page_settings = !empty( $page->settings ) ? json_decode($page->settings, true) : [];
        return view('front-end.page', compact('page_id', 'title', 'pg_description', 'page_settings'));
    }

    /**
     * Switch the user role.
     *
     * @return \Illuminate\Http\Response
     */
    public function switchRole( ){
        (new ProfileService)->switchRole();
        return redirect()->route('dashboard'); 
    }

    public function favoriteGig($gigId){
        $user     = getUserRole();
        if(!empty($gigId) && !empty($user['profileId'])){
            favouriteItem($user['profileId'] , $gigId, 'gig');
            return response()->json([
                'type' => 'success',
            ], 200);
        } else {
            return response()->json([
                'title' => __('general.error_title'),
                'message' => __('general.error_msg'),
                'type' => 'error'
            ], 403);
        }
    }

    public function favoriteProject($projectId){
        $user     = getUserRole();
        if(!empty($projectId) && !empty($user['profileId'])){
            favouriteItem($user['profileId'] , $projectId, 'project');
            return response()->json([
                'type' => 'success',
            ], 200);
        } else {
            return response()->json([
                'title' => __('general.error_title'),
                'message' => __('general.error_msg'),
                'type' => 'error'
            ], 403);
        }
    }

    public function processPayment($gateway){
        $paymentData = session()->get('payment_data');
        // session()->forget('payment_data');

        if (empty($paymentData)) {
            return redirect()->route('invoices')->with('payment_cancel', __('general.payment_cancelled_desc'));
        }

        $gatewayObj = getGatewayObject($gateway);
        if(!empty($gatewayObj)) {
            $response = $gatewayObj->chargeCustomer($paymentData);

            if(is_array($response) && array_key_exists('message', $response)){
                return redirect()->route('invoices')->with('payment_cancel', $response['message']);
            }
            return $response;
        }
    }
}
