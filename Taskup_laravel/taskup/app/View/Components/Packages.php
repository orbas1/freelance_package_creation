<?php

namespace App\View\Components;

use App\Models\Package\Package;
use App\Models\Package\PackageSubscriber;
use Illuminate\View\Component;

class Packages extends Component
{
    public $profile_id, $userRole;
    public $subscribe_packages;
    public $packages;
    public $role_id             = 0;
    public $date_format         = '';
    public $currency_symbol     = '';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $currency               = setting('_general.currency');
        $date_format            = setting('_general.date_format');
        $this->date_format      = !empty($date_format)  ? $date_format : 'm d, Y';
        $currency_detail        = !empty( $currency)    ? currencyList($currency) : array();
        
        if( !empty($currency_detail['symbol']) ){
            $this->currency_symbol = $currency_detail['symbol']; 
        }

        // $user = getUserRole();
        // $this->profile_id   = $user['profileId']; 
        // $this->userRole     = $user['roleName'];
        // $this->role_id      = $user['roleId'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $purchased_packages     = PackageSubscriber::where(['subscriber_id' => $this->profile_id ])->select('package_id','package_options','package_expiry','status')->get();
        $this->subscribe_packages     = [];
        if(!empty($purchased_packages)){
            foreach($purchased_packages as $package){
                $this->subscribe_packages[$package->package_id] = $package;
            }
        }

        $this->packages               = Package::where(['status' => 'active'])->get();

        return view('components.packages');
    }
}
