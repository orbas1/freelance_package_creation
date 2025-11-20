<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Accounts\PayoutMethodRequest;
use App\Http\Requests\Accounts\WithdrawRequest;
use App\Http\Resources\Payouts\PayoutsCollection;
use App\Services\AccountService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    use ApiResponser;

    private AccountService $accountService;

    public function __construct(AccountService $accountService) {
        $this->accountService = $accountService;
    }

    public function getAccountStats(Request $request) {
        $user     = getUserRole();
        return match ($user['roleName']) {
            'seller'    => $this->getSellerAccountStats($request) ,
            'buyer'     => $this->getBuyerAccountStats($request),
            default     => null
        };

    }

    public function getSellerAccountStats(Request $request) {
        $user                   = getUserRole();
        $profileId              = $user['profileId'];

        $wallet = $this->accountService->getUserWallet($profileId);
        return $this->accountService->getSellerAccountStats($request, $wallet, $profileId);
    }

    public function getBuyerAccountStats(Request $request) {
        $user                  = getUserRole();
        $profileId             = $user['profileId'];

        $wallet = $this->accountService->getUserWallet($profileId);
        return $this->accountService->getBuyerAccountStats($request, $wallet, $profileId);
    }

    public function getPayoutHistory(Request $request) {
        $user                   = getUserRole();
        $profileId              = $user['profileId'];

        $filters = [
            'status'         => $request->status ?? '',
            'per_page'       => $request->per_page ?? '',
        ];

        $payouts = $this->accountService->getPayoutHistory($filters, $profileId);
        return $this->success(new PayoutsCollection($payouts), __('general.payout_history'));
    }

    public function setPayoutMethod(PayoutMethodRequest $request)
    {
        $isUpdated = $this->accountService->setPayoutMethod($request->all());
        if($isUpdated){
            return $this->success( null, __('general.success_message'));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }

    public function getPayoutMethod(Request $request)
    {
        $data = $this->accountService->getPayoutMethod();
        // if($data){
            return $this->success( $data, __('general.payout_method'));
        // } else {
        //     return $this->error( __('settings.wrong_msg'));
        // }
    }
    
    public function withdrawAmount(WithdrawRequest $request)
    {
        $amount = $request->amount;
        $payout_type = $request->payout_type;
        $response = $this->accountService->withdrawAmount(amount: $amount, payout_type: $payout_type);

        if($response['type'] == 'success'){
            return $this->success( null, $response['message']);
        } else {
            return $this->error( $response['message']);
        }
    }
}
