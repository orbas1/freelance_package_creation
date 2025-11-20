<?php

namespace App\Http\Controllers\OptionBuilderSettings;

use App\Http\Controllers\Controller;
use App\Services\OptionBuilderService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class OptionBuilderController extends Controller
{
    use ApiResponser;
    private OptionBuilderService $opService;

    public function __construct(OptionBuilderService $opService) {
        $this->opService = $opService;
    }

    public function getOpSettings(Request $request){
        $token      = $request->bearerToken();
        $settings   = [];
        if(!empty($token)){
            $settings = $this->opService->get(NULL, true);
            return $this->success($settings, __('general.option_builder_setings'));
        } else {
            $settings = $this->opService->getPublicKeys();
            return $this->success($settings, __('general.option_builder_setings'));
        }
    }
}
