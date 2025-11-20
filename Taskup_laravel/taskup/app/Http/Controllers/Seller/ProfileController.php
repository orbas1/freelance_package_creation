<?php

namespace App\Http\Controllers\Seller;

use App\Models\Gig\Gig;
use App\Models\Profile;
use Livewire\Component;
use App\Models\UserWallet;
use App\Models\SellerPayout;
use App\Models\FavouriteItem;
use App\Models\UserWalletDetail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class ProfileController extends Controller
{

    /**
     * Display the seller profile page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug){
        
        $address_format             = setting('_general.address_format');
        $currency                   = setting('_general.currency');
        $date_format                = setting('_general.date_format');
        $profile_adsense_code       = setting('_adsense.profile_adsense_code');
        $allow_social_links         = setting('_seller.social_links');
        $seller_banner_img      = setting('_seller.seller_banner_img');
        $user                   = getUserRole();
        $date_format            = !empty($date_format)  ? $date_format : 'm d, Y';
        $user_role              = !empty($user['roleName']) ? $user['roleName'] : '';
        $profile_id             = !empty($user['profileId']) ? $user['profileId'] : ''; 
        $currency_detail        = !empty($currency) ? currencyList($currency) : array();
        $currency_symbol        = !empty($currency_detail) ?  $currency_detail['symbol'] : '';
        $address_format         = !empty($address_format)  ? $address_format : 'state_country';
        $adsense_code           = !empty($profile_adsense_code)  ? $profile_adsense_code : '';
        $def_banner_img         = !empty($seller_banner_img)  ? $seller_banner_img : '';
        $is_favourite           = 0;
        
        $relations = array(
            'skills:id,name',
            'languages:id,name',
            'user:id',
            'user.userAccountSetting:id,user_id,hourly_rate,verification',
        );

        if($allow_social_links == '1'){
            array_push($relations, 'socialLinks:id,profile_id,name,url'); 
        }
        $seller_role_id = getRoleByName('seller');

        $profile  = Profile::select(
            'id',
            'user_id',
            'first_name',
            'last_name',
            'slug',
            'description',
            'image',
            'banner_image',
            'address',
            'tagline',
            'english_level',
            'seller_type')
        ->with( $relations )->withCount('profile_visits')->withAvg('ratings','rating')
        ->withCount('ratings')->where('slug', $slug)->where('role_id', $seller_role_id )->firstOrFail();

        $seller_id  = $profile->id;
        AddVisitCount( $seller_id, 'profile');
        
        if( Auth::user() ){
            $is_favourite   = FavouriteItem::where(['user_id'=> $profile_id, 'corresponding_id' => $seller_id, 'type' =>'profile'])->count('id');
        }
        $title      = $profile->full_name;
        $sitInfo    = getSiteInfo();
        $siteTitle  = $sitInfo['site_name'];
        $image      = 'storage/'.$profile->image;

        $OgContent  = [
                'og:site_name'      => $siteTitle,
                'og:type'           => 'website',
                'og:title'          => $title,
                'og:url'            => url()->current(), 
                'og:image'          => asset($image),               
                'og:description'    => $profile->description,
           ];

        return view('front-end.sellers.profile', 
        compact(
            'profile',  'address_format', 
            'currency_symbol','user_role', 
            'is_favourite','allow_social_links',
            'adsense_code', 'date_format','def_banner_img','title', 'OgContent'
        ));
    }

    public function sendMessage(Request $request){
        $seller_id = $request->seller_id;
        $message = $request->message;
        $user_id = Auth::user()->id;
        return sendMessage($seller_id, $user_id, $message);
    }
}
