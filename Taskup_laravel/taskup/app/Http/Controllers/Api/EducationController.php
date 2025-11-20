<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Education\EducationStoreRequest;
use App\Http\Resources\Education\EducationResource;
use App\Services\EducationService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    use ApiResponser;

    private EducationService $educationService;

    public function __construct(EducationService $educationService) {
        $this->educationService = $educationService;
    }

    public function getEducations(){
        $user                  = getUserRole();
        $profileId             = $user['profileId'];

        $educatons = $this->educationService->getEducations($profileId);
        return $this->success(EducationResource::collection($educatons), __('general.education'));
    }

    public function addEducation(Request $request){

        $eductionData   = $request->only('profile_id', 'deg_title', 'deg_institue_name', 'address', 'deg_description', 'deg_start_date', 'deg_end_date', 'is_ongoing'); 
        $educatons      = $this->educationService->addEducation($eductionData);
        if($educatons){
            return $this->success( null, __('general.success_message'));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }

    public function updateEducation(Request $request, $id){
        $eductionData   = $request->only('profile_id', 'deg_title', 'deg_institue_name', 'address', 'deg_description', 'deg_start_date', 'deg_end_date', 'is_ongoing'); 
        $educatons      = $this->educationService->updateEducation($eductionData, $id);
        if($educatons){
            return $this->success( null, __('general.update_education'));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }

    public function deleteEducation(Request $request, $educationId){
        $result = $this->educationService->deleteEducation($educationId);
        if ($result) {
            return $this->success( $result, __('general.delete_message')); 
        } else {
            return $this->error( __('general.not_authorize'));
        }
    }
}