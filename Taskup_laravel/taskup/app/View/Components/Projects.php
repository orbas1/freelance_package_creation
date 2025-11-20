<?php

namespace App\View\Components;

use App\Models\FavouriteItem;
use App\Models\Project;
use Illuminate\View\Component;

class Projects extends Component
{
    public $fav_projects;
    public $limit;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($limit = 6)
    {
        $this->limit = $limit;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $projects = [];
        $currency_symbol =  $address_format = null;

        $projects = Project::select(
            'id',
            'author_id',
            'project_title',
            'slug',
            'updated_at',
            'project_type',
            'project_description',
            'project_min_price',
            'project_location',
            'project_country',
            'project_expert_level',
            'project_duration',
            'project_max_price',
            'address',
            'project_hiring_seller',
            'is_featured',
            'status'
        )->with(
                [
                    'expertiseLevel:id,name',
                    'projectLocation:id,name', 
                    'projectAuthor:id,first_name,last_name,image',
                    'skills:id,name'
                ]
        )
        ->whereStatus('publish')
        ->latest()
        ->take($this->limit)->get();

        $user     = getUserRole();
        $this->fav_projects = [];

        if( !empty($user['profileId']) ){
            $this->fav_projects = FavouriteItem::where(['type' => 'project', 'user_id' => $user['profileId']])->select('corresponding_id as project_id')->get()->pluck('project_id')->toArray();
        } 
        
        $currency                       = setting('_general.currency')??null;
        $currency_detail                = !empty($currency)  ? currencyList($currency) : array();
        if(!empty($currency_detail)){
            $currency_symbol        = $currency_detail['symbol']; 
        }

        $address_format                 = setting('_general.address_format')??null;

        return view('components.projects', compact('projects', 'currency_symbol', 'address_format'));
    }
}
