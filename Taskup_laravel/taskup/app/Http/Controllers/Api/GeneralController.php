<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Item\FavItemRequest;
use App\Http\Resources\Item\SavedItemCollection;
use App\Services\GeneralService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    use ApiResponser;

    public function setFavItem(FavItemRequest $request)
    {  
        $corresponding_id = $request?->corresponding_id ?? '';
        $type = $request?->type ?? '';
        $user = getUserRole();
        $profile_id = !empty($user['profileId']) ? $user['profileId'] : '';
        $response = favouriteItem($profile_id, $corresponding_id, $type);

        if( $response['isUpdated'] ){
            return $this->success( $response['action'] == 'added' ? __('general.added_in_fav') : __('general.removed_from_fav'));
        } else {
            return $this->error( __('settings.wrong_msg'));
        }
    }

    public function getSavedItem(Request $request)
    {
        $type = $request?->type ?? 'saller';
        $search = $request?->search ?? '';
        $per_page =  $request->per_page ?? setting('_general.per_page_record');
       
        $items = (new GeneralService)->getSavedItem(type: $type, search: $search, per_page: $per_page);
        // dd($items);
        return $this->success(new SavedItemCollection($items));
        // if($request->type == 'gig'){
            
        // } elseif($request->type == 'profile'){
        //     return $this->success(new SavedItemCollection($items));
        // } elseif($request->type == 'project'){
        //     return $this->success(new SavedItemCollection($items));
        // } else {
        //     return $this->error( __('settings.wrong_msg'));
        // }
    }
}
