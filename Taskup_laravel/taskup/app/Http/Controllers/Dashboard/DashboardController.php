<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\Gig\Gig;
use App\Models\Project;
use App\Models\UserWallet;
use App\Models\Transaction;
use App\Models\Gig\GigOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\UserWalletDetail;
use App\Models\Proposal\Proposal;
use Illuminate\Support\Facades\DB;
use App\Models\Seller\SellerPayout;
use App\Http\Controllers\Controller;
use App\Models\Seller\SellerWithdrawal;
use App\Services\AccountService;

class DashboardController extends Controller
{
    public $buyerAccountStats;
    private AccountService $accountService;

    public function __construct(AccountService $accountService) {
        $this->accountService = $accountService;
    }

    /**
     * Display the seller/buyer dashboard page.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request){
        $user                   = getUserRole();
        $userRole               = $user['roleName'];
        $profile_id             = $user['profileId'];
        $method_type            = '';

        if( $userRole == 'buyer' ){
            $getSetting         = getTPSetting(['payment'], ['payment_methods']);
            $payment_methods    = !empty( $getSetting['payment_methods'] ) ? unserialize($getSetting['payment_methods']) : [];
            $method_type        = !empty( $payment_methods['method_type'] ) ? $payment_methods['method_type'] : '';
        }
        $adsense_code           = !empty($dashboard_adsense_code)  ? $dashboard_adsense_code : '';
        $currency_detail        = !empty($currency) ? currencyList($currency) : array();
        $currency_symbol        = !empty($currency_detail) ?  $currency_detail['symbol'] : '';
        $compact_values         = [
            'profile_id'        => $profile_id, 
            'currency_symbol'   => $currency_symbol, 
            'adsense_code'      => $adsense_code,
            'method_type'       => $method_type,
            'user_role'         => $userRole,
        ];

        $wallet         = $this->accountService->getUserWallet($profile_id);

        if( $userRole == 'seller' ) {
            
            $sellerAccountStats = $this->accountService->getSellerAccountStats($request, $wallet, $profile_id);

            $compact_values['ongoing_projects']     = $sellerAccountStats['ongoing_projects'];
            $compact_values['completed_projects']   = $sellerAccountStats['completed_projects'];
            $compact_values['cancelled_projects']   = $sellerAccountStats['cancelled_projects'];
            $compact_values['ongoing_gigs']         = $sellerAccountStats['ongoing_gigs'];
            $compact_values['sold_gigs']            = $sellerAccountStats['sold_gigs'];
            $compact_values['cancelled_gigs']       = $sellerAccountStats['cancelled_gigs'];
            $compact_values['total_earning']        = $sellerAccountStats['total_earning'] ?? 0;
            $compact_values['available_balance']    = $sellerAccountStats['available_balance'];
            $compact_values['withdraw_amount']      = $sellerAccountStats['withdraw_amount'];
            $compact_values['pending_income']       = $sellerAccountStats['pending_income'];
            $compact_values['price_intervals']      = $sellerAccountStats['price_intervals'];
            $compact_values['date_intervals']       = $sellerAccountStats['date_intervals'];

        } elseif( $userRole == 'buyer' ) {

            $this->buyerAccountStats = $this->accountService->getBuyerAccountStats($request, $wallet, $profile_id);

            $compact_values['posted_project']       = $this->buyerAccountStats['projects'] ?? 0;
            $compact_values['buyed_gigs']           = $this->buyerAccountStats['gig_orders'] ?? 0;
            $compact_values['ongoing_projects']     = $this->buyerAccountStats['ongoing_projects'] ?? 0;
            $compact_values['completed_projects']   = $this->buyerAccountStats['completed_projects'] ?? 0;
            $compact_values['cancelled_projects']   = $this->buyerAccountStats['cancelled_projects'] ?? 0;
            $compact_values['ongoing_gigs']         = $this->buyerAccountStats['ongoing_gigs'] ?? 0;
            $compact_values['available_balance']    = $this->buyerAccountStats['available_balance'] ?? 0;
            $compact_values['project_spend_amount'] = $this->buyerAccountStats['total_earning'] ?? 0;
            $compact_values['gig_spend_amount']     = $this->buyerAccountStats['gig_spend_amount'] ?? 0;
            $compact_values['ongoing_amount']       = $this->buyerAccountStats['ongoing_amount'] ?? 0;
            $compact_values['price_intervals']      = $this->buyerAccountStats['price_intervals'] ?? [];
            $compact_values['date_intervals']       = $this->buyerAccountStats['date_intervals'] ?? [];
            $compact_values['ongoing_order_amount'] = $this->buyerAccountStats['ongoing_order_amount'] ?? 0;
        }

        addJsVars([
            'transaction_values'    => $this->buyerAccountStats['transaction_values'] ?? 0, 
            'user_role'             => $userRole,
        ]);

        $sitInfo        = getSiteInfo();
        $siteTitle      = $sitInfo['site_name'];
        $title = __('general.dashboard') . ' | ' . $siteTitle;

        return view('front-end.dashboard.dashboard', $compact_values)->with('title', $title);

    }
}

