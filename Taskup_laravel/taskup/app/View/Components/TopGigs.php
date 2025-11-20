<?php

namespace App\View\Components;

use App\Models\FavouriteItem;
use App\Models\Gig\Gig;
use App\Models\Gig\GigPlan;
use Illuminate\View\Component;

class TopGigs extends Component
{
    public $gigs;
    public $fav_gigs;
    public $limit;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($limit = 8)
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
        $this->gigs = Gig::select('id','author_id', 'title', 'slug','country','address','attachments','is_featured', 'status')
                ->with([
                'gigAuthor:id,user_id,first_name,last_name,slug,image',
                'gigAuthor.user.userAccountSetting:id,user_id,verification',

                ])->whereHas('gigAuthor.user')->withAvg('ratings','rating')
                ->withMin('gig_plans', 'price')
                ->withCount(['ratings','gig_visits'])->where('status', 'publish')->limit($this->limit)->inRandomOrder()->get();

        $user     = getUserRole();
       
        $this->fav_gigs = [];

        if( !empty($user['profileId']) ){
            $this->fav_gigs = FavouriteItem::where(['type' => 'gig', 'user_id' => $user['profileId']])->select('corresponding_id as gig_id')->get()->pluck('gig_id')->toArray();
        }
        $currency               = setting('_general.currency');
        $currency_detail        = !empty($currency) ? currencyList($currency) : array();
        $currency_symbol        = !empty($currency_detail) ?  $currency_detail['symbol'] : '';
        return view('components.top-gigs', compact('currency_symbol'));
    }
}
