<?php

namespace App\View\Components;

use App\Models\Project;
use Illuminate\View\Component;

class TopProjects extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $currency                       = setting('_general.currency');
        $address_format                 = setting('_general.address_format');
        $currency_detail                = !empty($currency)  ? currencyList($currency) : array();
        $address_format           = !empty($address_format)  ? $address_format : 'state_country';
        if(!empty($currency_detail)){
            $currency_symbol        = $currency_detail['symbol']; 
        }

        $latesProjects =  Project::select('id')->latest()->where('status', 'publish')->take(5)->pluck('id')->toArray();

        $projects = [];
        if( !empty($latesProjects) ){
            $projects = Project::select( 
            'id',
            'author_id',
            'project_title',
            'slug',
            'updated_at',
            'project_type',
            'project_min_price',
            'project_location',
            'project_country',
            'project_expert_level',
            'project_duration',
            'project_max_price',
            'address',
            'project_hiring_seller',
            'is_featured',
             'status')->with(
                array(
                    'expertiseLevel:id,name',
                    'projectLocation:id,name', 
                    'projectAuthor:id,first_name,last_name,image',
                )
            )->whereIn('id', $latesProjects)->get();
           
        }

        // dd($projects);

        return view('components.top-projects', compact('projects', 'address_format', 'currency_symbol'));
    }
}
