<?php

namespace App\View\Components;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Taxonomies\ProjectCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class Footer extends Component
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
        $categories = ProjectCategory::select('name')->when(!empty(setting('_site.popular-categories')), function($q){
            $q->whereIn('id', setting('_site.popular-categories'));
        })->get();
        
        $footer_menu = getFooterMenu();

        return view('components.footer', compact('categories', 'footer_menu'));
    }
}
