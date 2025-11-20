<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileSettings\PortfolioRequest;
use App\Http\Resources\Seller\PortfolioResource;
use App\Http\Resources\Seller\SellerCollection;
use App\Http\Resources\Seller\SellerDetailResource;
use App\Http\Resources\Seller\SellerResouce;
use App\Services\SellerService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    use ApiResponser;

    public function __construct()
    {
        if(!empty(request()->bearerToken())){
            $this->middleware('auth:sanctum')->only(['index','topSellers','sellerDetail']);
        }
    }

    public function index(Request $request)
    {
        $filters = [
            'selected_skills' => $request->selected_skills,
            'keyword' => $request->keyword,
            'languages' => $request->languages,
            'seller_min_hr_rate' => $request->seller_min_hr_rate,
            'seller_max_hr_rate' => $request->seller_max_hr_rate,
            'english_level' => $request->english_level,
            'seller_type' => $request->seller_type,
            'selected_location' => $request->selected_location,
            'profile_id' => $request->profile_id,
            'per_page' => $request->per_page ?? setting('_general.per_page_record'),
        ];
        $sellers = (new SellerService)->getSellers($filters, $request->sort_by ?? 'date_desc');

        return $this->success(new SellerCollection($sellers));
    }

    public function sellerDetail(int $id = 0)
    {
        $sellers = (new SellerService)->sellerDetail($id);

        if($sellers){
            return $this->success(new SellerDetailResource($sellers));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }

    public function topSellers(Request $request)
    {
        if(!empty(request()->bearerToken())) {
            $this->middleware('auth:sanctum');
        }
        $filters = [
            'per_page' => $request->per_page ?? '',
        ];
        $sellers = (new SellerService)->getSellers($filters, $request->sort_by ?? 'date_desc');
        return $this->success(SellerResouce::collection($sellers));
    }

    public function getPortfolios()
    {
        $portfolios = (new SellerService)->getPortfolios();

        if(!$portfolios->isEmpty()){
            return $this->success(PortfolioResource::collection($portfolios));
        } else {
            return $this->error( __('general.no_record_found'));
        }
    }

    public function updatePortfolio(PortfolioRequest $request, $id)
    {

        if( empty($id) || !is_numeric($id)){
            return $this->error( __('general.invalid_user_id'));
        }
        $data = [
            'title' => $request?->title ?? '',
            'url' => $request?->url ?? '',
            'description' => $request?->description ?? '',
            'files' => $request?->file('files') ?? null,
        ];

        $status = (new SellerService)->updatePortfolio($id, $data);

        if($status == 'success'){
            return $this->success( null, __('general.update_record'));
        } elseif($status == 'not_found'){
            return $this->error( __('general.no_record_found'));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }

    public function addPortfolio(PortfolioRequest $request)
    {
        $data = [
            'title' => $request?->title ?? '',
            'url' => $request?->url ?? '',
            'description' => $request?->description ?? '',
            'files' => $request?->file('files') ?? null,
        ];

        $is_added = (new SellerService)->createPortfolio($data);

        if($is_added){
            return $this->success( null, __('general.success_message'));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }

    public function deletePortfolio($id)
    {
        if( empty($id) || !is_numeric($id)){
            return $this->error( __('general.invalid_user_id'));
        }

        $is_deleted = (new SellerService)->deletePortfolio($id);

        if($is_deleted){
            return $this->success( null, __('general.delete_record'));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }
}


