<?php

namespace App\Http\Controllers\Api;

use Amentotech\LaraGuppy\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use App\Http\Resources\Dispute\DisputeCollection;
use App\Services\DisputeService;
use Illuminate\Http\Request;

class DisputeController extends Controller
{
    use ApiResponser;
    
    public function getDisputes(Request $request){
        $status = $request?->status ?? '';
        $per_page = $request?->per_page ?? 20;
        $search = $request?->search ?? '';
        $disputes = (new DisputeService)->getDisputes(
            search: $search,
            status: $status,
            per_page: $per_page
        );

        return $this->success(new DisputeCollection($disputes));
    }
}
