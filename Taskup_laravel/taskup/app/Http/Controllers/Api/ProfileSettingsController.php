<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileSettings\BillingInfoRequest;
use App\Http\Requests\ProfileSettings\ChangePasswordRequest;
use App\Http\Requests\ProfileSettings\DeactivateAccountRequest;
use App\Http\Requests\ProfileSettings\IdentificaionRequest;
use App\Http\Requests\ProfileSettings\PrivacyInfoRequest;
use App\Http\Requests\ProfileSettings\ProfileSettingsRequest;
use App\Http\Resources\Profile\BillingResource;
use App\Http\Resources\Profile\IdentityInfoResource;
use App\Http\Resources\Profile\ProfileResource;
use App\Http\Resources\UserResource;
use App\Services\ProfileService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileSettingsController extends Controller
{
    use ApiResponser;

    public function changePassword(ChangePasswordRequest $request) {
        $current_pass = $request->current_password;
        $new_password = $request->new_password;
        $isUpdate = (new ProfileService)->ChangePassword(password: $current_pass, new_password: $new_password);
        if($isUpdate){
            return $this->success( null, __('account_settings.password_changed'));
        } else {
            return $this->error(__('account_settings.wrong_error_msg'));
        }
    }

    public function updatePrivacyInfo(PrivacyInfoRequest $request){
        $show_image = $request->show_image ?? false;
        $isUpdate = (new ProfileService)->udpateProfileImageVisibility($show_image);

        if($isUpdate){
            return $this->success( $isUpdate, __('general.success_message'));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }

    public function deactivateAccount(DeactivateAccountRequest $request){
        $reason = $request->reason ?? '';
        $description = $request->description ?? '';
        $isUpdate = (new ProfileService)->deactivateAccount($reason,$description);
        if($isUpdate){
            return $this->success( null, __('general.success_message'));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }

    public function updateProfileInfo(ProfileSettingsRequest $request){
        $data = [
            'first_name' => $request->first_name ?? '',
            'last_name' => $request->last_name ?? '',
            'tagline' => $request->tagline ?? '',
            'country' => $request->country ?? '',
            'seller_type' => $request->seller_type ?? '',
            'english_level' => $request->english_level ?? '',
            'skills' => $request->skills ?? [],
            'languages' => $request->languages ?? [],
            'hourly_rate' => $request->hourly_rate ?? '',
            'description' => $request->description ?? '',
            'zipcode' => $request->zipcode ?? '',
        ];

        $response = (new ProfileService)->updatePrifileSettings($data);

        if( $response['type'] == 'zipcode_error' ) {
            return $this->error( __('general.zipcode_error'));
        } else if( $response['type'] == 'success' ){
            $user = Auth::user();
            return $this->success(new UserResource($user), __('project.project_detail'));

        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }


    public function updateProfilePhoto(Request $request){
        $response = (new ProfileService)->updateProfileImage($request->file ?? '');

        if( $response['type'] == 'file_type_error' ) {
            return $this->error( $response['message']);
        } else if( $response['type'] == 'success' ){
            $user = Auth::user();
            return $this->success( new UserResource($user), __('general.success_message'));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }

    public function uploadIdentityInfo(IdentificaionRequest $request){
        $data = [
            'name' => $request->name ?? '',
            'contact_no' => $request->contact_no ?? '',
            'identity_no' => $request->identity_no ?? '',
            'address' => $request->address ?? '',
            'attachments' => $request?->file('attachments') ?? null,
        ];

        $response = (new ProfileService)->uploadIdentityInfo($data);

        if( $response['type'] == 'req_file_error' ) {
            return $this->error( $response['message']);
        } else if( $response['type'] == 'success' ){
            return $this->success( null, __('general.success_message'));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }

    public function getIdentityInfo()
    {
        $data = (new ProfileService)->getIdentityInfo();
        if ($data) {
            $status     = $data->user->userAccountSetting->verification ?? null;
            $message    = '';
            if ($status === 'pending') {
                $message = __('general.pending');
            } elseif ($status === 'processed') {
                $message = __('general.processed');
            } elseif ($status === 'approved') {
                $message = __('general.approved');
            } elseif ($status === 'rejected') {
                $message = __('general.rejected');
            }
        }
        
        return response()->json([
            'status'                => 200,
            'message'               => $message,
            'identify_verification' => $status,
            'data'                  => !empty($data) ? new IdentityInfoResource($data): null,
        ]);
        // return $this->success( !empty($data) ? new IdentityInfoResource($data): null, __('general.fetch_data'));
    }


    public function updateBillingInfo(BillingInfoRequest $request){
        $response = (new ProfileService)->updateBillingInfo($request->all());

        if( $response['type'] == 'success' ){
            return $this->success( $response['data'], __('general.success_message'));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }

    public function getBillingInfo(){
        $response = (new ProfileService)->getBillingInfo();
        return $this->success( new BillingResource($response));
    }

    public function useDetail()
    {
        $data = (new ProfileService)->getUserDetail();
        if( $data ){
            return $this->success( new ProfileResource($data));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }

    }

    public function switchProfile()
    {
        $is_updated = (new ProfileService)->switchRole();
        if( $is_updated ){
            $user = Auth::user();
            return $this->success( new UserResource($user), __('general.profile_updated'));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }
}
