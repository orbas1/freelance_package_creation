<?php

namespace App\View\Components;

use App\Models\FavouriteItem;
use App\Models\Gig\Gig;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Role;
use Illuminate\View\Component;

class Sellers extends Component
{
    public $order_by           = 'date_desc';
    public $profile_id         = '';
    public $profile;
    public $projects;
    public $favourite_sellers;
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
        $this->profile = Profile::select('id','user_id', 'slug', 'first_name', 'last_name', 'image', 'tagline','address','description', 'role_id', 'is_featured')
                            ->where('role_id', 3) 
                            ->withAvg('ratings','rating')->withCount('ratings')
                            ->withCount('profile_visits')->orderByDesc("profile_visits_count")
                            ->with([
                                'skills:id,name',
                                'user' => function($query){
                                    $query->select('id');
                                },
                                'user.userAccountSetting' => function($query){
                                    $query->select('id','user_id','verification','hourly_rate','show_image');
                                    if( $this->order_by == 'price_desc' ){
                                        $query->orderBy('hourly_rate', 'desc');
                                    }elseif( $this->order_by == 'price_asc' ){
                                        $query->orderBy('hourly_rate', 'asc');
                                    }
                                }])
                            ->whereHas('user', function($query){
                                $query->whereNotNull( 'email_verified_at');
                            })
                            ->take($this->limit)
                            ->inRandomOrder()
                            ->get();

            $user     = getUserRole();
            $this->favourite_sellers = [];

            if( !empty($user['profileId']) ){
                $this->favourite_sellers  = FavouriteItem::select('corresponding_id')->where('user_id', $this->profile_id)->pluck('corresponding_id')->toArray();
            }
            $currency               = setting('_general.currency');
            $currency_detail        = !empty($currency) ? currencyList($currency) : array();
            $currency_symbol        = !empty($currency_detail) ?  $currency_detail['symbol'] : '';
        return view('components.sellers', compact('currency_symbol'));
    }
}
