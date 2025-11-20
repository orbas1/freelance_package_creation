<?php

namespace App\View\Components;

use App\Models\Taxonomies\ProjectCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BannerCategories extends Component
{
    public $categories;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->categories = ProjectCategory::select('id','name','slug', 'image')
        ->when(!empty(setting('_site.popular-categories')), function($q){
            return $q->whereIn('id', setting('_site.popular-categories'));
        })->get();

        return view('components.banner-categories');
    }
}
