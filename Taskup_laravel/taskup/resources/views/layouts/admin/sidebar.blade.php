@php
    $info       = getUserInfo();
    $siteInfo   = getSiteInfo();
    $site_dark_logo  = !empty($siteInfo['site_dark_logo']) ? 'storage/'.$siteInfo['site_dark_logo'] : 'images/logo.svg';

    $activeRoute        = request()->route()->getName();
    $activeTaxonomyTab  = in_array($activeRoute, [
    'project-categories',
    'gig-categories',
    'gig-delivery-time',
    'tags',
    'skills',
    'languages',
    'project-duration',
    'project-location',
    'expert-levels'
    ]);

    $activePaymentTab           = in_array($activeRoute, ['commission-settings', 'payment-methods']);
    $activeSiteManagementTab    = in_array($activeRoute, ['SitePages', 'manage-menu', 'optionbuilder', 'EmailTemplates']);
    $activeTransactionTab       = in_array($activeRoute, [
    'withdraw-requests',
    'admin-earnings',
    'commission-settings',
    'payment-methods',
    'packages-setting',
    'disputes'
    ]);
    $activeProjectManagementTab     = in_array($activeRoute, ['projects', 'proposals']);
    $activeGigManagementTab         = in_array($activeRoute, ['gigs', 'admin-gig-orders']);


@endphp
<div class="tb-sidebarwrapperholder">
    <aside id="tb-sidebarwrapper" class="tb-sidebarwrapper">
        <div id="tb-btnmenutoggle" class="tb-btnmenutoggle">
            <a href="javascript:void(0);"><i class="ti-pin2"></i></a>
        </div>
        <div class="tb-sidebartop">
            <a class="tb-icongray" href="javascript:void(0)"><i class="icon-layout"></i></a>
            <div class="tb-dropdoenwrap">
                <div class="tb-logowrapper tb-icontoggler">
                    @if(!empty($info) )
                        <div class="tb-adminheadwrap">
                            <strong class="tb-adminhead__img">
                                <img src="{{ asset($info['user_image']) }}" alt="{{ $info['user_name'] }}">
                            </strong>
                            <div class="tb-adminuserinfo">
                                <h6>{{ $info['user_name'] }}</h6>
                                <span >{{ __('general.active_status') }}</span>
                            </div>
                        </div>
                    @endif
                    <a href="javascript:void(0)"><i class="icon-chevron-down"></i></a>
                    <ul class="tb-dropdownlist">
                        <li class="">
                            <a href="{{ route('profile') }}">
                                <i class="icon-user"></i> {{ __('sidebar.profile') }} 
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ url('clear-cache') }}">
                                <i class="ti-reload"></i> {{ __('general.clear_cache') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}" target="_blank">
                                <i class="ti-new-window"></i> {{ __('general.view_site') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <nav id="tb-navdashboard" class="tb-navdashboard">
            <ul class="tb-siderbar-nav ">
                <li class ="{{ request()->routeIs('profile') ? 'active' : '' }}">
                    <a class="tb-menuitm" href="{{ route('profile') }}">
                        <i class="icon-user"></i><span class="tb-navdashboard__title">{{ __('sidebar.profile') }}</span>
                    </a>
                </li>
                <li class="menu-has-children {{$activeTaxonomyTab ? 'active tb-openmenu': ''}}">
                    <a class="tb-menuitm" href="javascript:void(0);">
                        <i class="icon-layers"></i><span class="tb-navdashboard__title">{{__('sidebar.taxonomies')}}</span>
                    </a>
                    <ul class="sidebar-sub-menu" style="display:{{$activeTaxonomyTab ? 'block': ''}}">
                        <li class ="{{ request()->routeIs('project-categories') ? 'active' : '' }}">
                            <a href="{{ route('project-categories') }}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{ __('sidebar.project-categories') }}</span>
                            </a>
                        </li>
                        <li class ="{{ request()->routeIs('gig-categories') ? 'active' : '' }}">
                            <a href="{{ route('gig-categories') }}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{ __('sidebar.gig-categories') }}</span>
                            </a>
                        </li>
                        <li class ="{{ request()->routeIs('tags') ? 'active' : '' }}">
                            <a href="{{ route('tags') }}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{ __('sidebar.tags') }}</span>
                            </a>
                        </li>
                        <li class ="{{ request()->routeIs('gig-delivery-time') ? 'active' : '' }}">
                            <a href="{{ route('gig-delivery-time') }}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{ __('sidebar.gig_delivery_time') }}</span>
                            </a>
                        </li>
                        <li class ="{{ request()->routeIs('skills') ? 'active' : '' }}">
                            <a href="{{ route('skills') }}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{ __('sidebar.skills') }}</span>
                            </a>
                        </li>
                        <li class ="{{ request()->routeIs('languages') ? 'active' : '' }}">
                            <a href="{{ route('languages') }}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{ __('sidebar.languages') }}</span>
                            </a>
                        </li>
                        <li class ="{{ request()->routeIs('project-duration') ? 'active' : '' }}">
                            <a href="{{ route('project-duration') }}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{ __('sidebar.project_duration') }}</span>
                            </a>
                        </li>
                        <li class ="{{ request()->routeIs('project-location') ? 'active' : '' }}">
                            <a href="{{ route('project-location') }}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{ __('sidebar.project_locations') }}</span>
                            </a>
                        </li>
                        <li class ="{{ request()->routeIs('expert-levels') ? 'active' : '' }}">
                            <a href="{{ route('expert-levels') }}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{ __('sidebar.expert_levels') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-has-children {{$activeSiteManagementTab ? 'active tb-openmenu': ''}}">
                    <a href="javascript:void(0);" class="tb-menuitm">
                        <i class="icon-layout"></i><span class="tb-navdashboard__title">{{ __('sidebar.site_management')}}</span>
                    </a>
                    <ul class="sidebar-sub-menu" style="display:{{$activeSiteManagementTab ? 'block': ''}}">
                        <li class="{{ request()->routeIs('pagebuilder') ? 'active' : '' }}">
                            <a href="{{route('pagebuilder')}}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{__('sidebar.sitepages')}}</span>
                            </a>
                        </li> 
                        <li class="{{ request()->routeIs('manage-menu') ? 'active' : '' }}">
                            <a href="{{route('manage-menu')}}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{__('sidebar.menu')}}</span>
                            </a>
                        </li>
                        <li class ="{{ request()->routeIs('optionbuilder') ? 'active' : '' }}">
                            <a href="{{ route('optionbuilder') }}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{ __('sidebar.settings') }}</span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('EmailTemplates') ? 'active' : '' }}">
                            <a href="{{route('EmailTemplates')}}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{__('sidebar.email_templates')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-has-children {{$activeTransactionTab ? 'active tb-openmenu': ''}}">
                    <a href="javascript:void(0);" class="tb-menuitm">
                        <i class="icon-credit-card"></i><span class="tb-navdashboard__title">{{ __('sidebar.transaction_payment')}}</span>
                    </a>
                    <ul class="sidebar-sub-menu" style="display:{{$activeTransactionTab ? 'block': ''}}">
                        <li class="{{ request()->routeIs('withdraw-requests') ? 'active' : '' }}">
                            <a href="{{route('withdraw-requests')}}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{__('sidebar.withdraw_requests')}}</span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('admin-earnings') ? 'active' : '' }}">
                            <a href="{{route('admin-earnings')}}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{__('sidebar.earnings')}}</span>
                            </a>
                        </li>
                        <li class ="{{ request()->routeIs('commission-settings') ? 'active' : '' }}">
                            <a href="{{ route('commission-settings') }}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{ __('sidebar.commission_settings') }}</span>
                            </a>
                        </li>
                        <li class ="{{ request()->routeIs('payment-methods') ? 'active' : '' }}">
                            <a href="{{ route('payment-methods') }}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{ __('sidebar.payment_methods') }}</span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('packages-setting') ? 'active' : '' }}">
                            <a href="{{route('packages-setting')}}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{__('sidebar.packages')}}</span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('disputes') ? 'active' : '' }}">
                            <a href="{{route('disputes')}}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{__('sidebar.disputes')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-has-children {{$activeProjectManagementTab ? 'active tb-openmenu': ''}}">
                    <a href="javascript:void(0);" class="tb-menuitm" >
                        <i class="icon-file-text"></i><span class="tb-navdashboard__title">{{ __('sidebar.project_management')}}</span>
                    </a>
                    <ul class="sidebar-sub-menu" style="display:{{$activeProjectManagementTab ? 'block': ''}}">
                        <li class="{{ request()->routeIs('projects') ? 'active' : '' }}">
                            <a href="{{route('projects')}}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{__('sidebar.projects')}}</span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('proposals') ? 'active' : '' }}">
                            <a href="{{route('proposals')}}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{__('sidebar.proposals')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li id='gig-management' class="menu-has-children {{$activeGigManagementTab ? 'active tb-openmenu': ''}}">
                    <a href="javascript:void(0);" class="tb-menuitm">
                        <i class="icon-database"></i><span class="tb-navdashboard__title">{{ __('sidebar.gig_management')}}</span>
                    </a>
                    <ul class="sidebar-sub-menu" style="display:{{$activeGigManagementTab ? 'block': ''}}">
                        <li class="{{ request()->routeIs('gigs') ? 'active' : '' }}">
                            <a href="{{route('gigs')}}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{__('sidebar.gigs')}}</span>
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('admin-gig-orders') ? 'active' : '' }}">
                            <a href="{{route('admin-gig-orders')}}">
                                <!-- <i class="icon-corner-down-right"></i> -->
                                <span class="tb-navdashboard__title">{{__('sidebar.gig_orders')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->routeIs('users') ? 'active' : '' }}">
                    <a href="{{route('users')}}" class="tb-menuitm">
                        <i class="icon-users"></i><span class="tb-navdashboard__title">{{__('sidebar.users')}}</span>
                    </a>
                </li>
            </ul>
            <form method="POST" action="{{ route('logout') }}">  
                @csrf  
                <a href="{{ route('logout') }}" class="tb-haslogout  tb-menuitm"   onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="ti-power-off"></i><span class="tb-navdashboard__title"> {{ __('sidebar.logout') }}</span>
                </a>
            </form>    
        </nav>
    </aside>
</div>
