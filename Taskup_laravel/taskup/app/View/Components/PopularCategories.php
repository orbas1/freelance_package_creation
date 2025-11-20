<?php

namespace App\View\Components;

use App\Models\Taxonomies\ProjectCategory;
use Illuminate\View\Component;

class PopularCategories extends Component
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
        $categories = ProjectCategory::select('id','name','slug', 'image')
        ->when(!empty(setting('_site.popular-categories')), function($q){
            return $q->whereIn('id', setting('_site.popular-categories'));
        })
        ->with('children',function($query){
            $query->select('id','parent_id', 'name','slug');
            $query->withCount('children');
            
        })->whereNull('parent_id')->get();

        return view('components.popular-categories', compact('categories'));
    }
}
