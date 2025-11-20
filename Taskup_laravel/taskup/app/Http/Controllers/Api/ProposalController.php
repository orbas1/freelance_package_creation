<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProposalStoreRequest;
use App\Models\Project;
use App\Services\ProposalService;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    private ProposalService $proposalService;

    public function __construct(ProposalService $proposalService) {
        $this->proposalService = $proposalService;
    }

    public function submitProposal(ProposalStoreRequest $request, $id)
    {
        return $this->proposalService->submitProposal($request, $id);
    }

    public function getFeeTax(Request $request)
    {
        $project = Project::select(
            'id',
            'project_title',
            'project_category',
            'author_id',
            'project_payout_type',
            'project_type',
            'project_payment_mode',
            'project_max_hours',
            'project_min_price',
            'project_max_price',
            'project_duration',
            'project_location',
            'project_country',
            'project_hiring_seller',
            'is_featured',
            'project_expert_level',
            'updated_at',
        )->first();

        if ($project) {
            $params = array(
                'proposal_amount'       => $request->budget_rate,
                'project_type'          => $project->project_type,
                'project_min_price'     => $project->project_min_price,
                'project_max_price'     => $project->project_max_price,
            );
        } else {
            return response()->json(['error' => 'Project not found'], 404);
        }

        return getAmountWithcommission($params); 
    }
}