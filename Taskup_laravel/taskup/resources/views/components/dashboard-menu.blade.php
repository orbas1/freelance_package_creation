@role('buyer|seller')
    <div class="tk-themesidebar">
        <div class="tk-sidetooglearea">
            <span id="#openButton" class="tk-toggler-btn">
                <i class="icon-layout" aria-hidden="true"></i>
            </span>
        </div>
        <x-user-menu />
        <nav class="tk-navbarbtm">
            <div class="tk-createbtn-wraper">
                @role('seller')
                    @if(gigEnabled())
                        <a href="{{route('create-gig')}}" class="tk-create-button"> <span>{{__('navigation.create_gig')}}</span>
                            <i class="icon-edit"></i>
                        </a>
                    @endif
                @else
                    @if(projectEnabled())    
                        <a href="{{route('create-project')}}" class="tk-create-button">
                            <span>{{__('navigation.post_project')}}</span>
                            <i class="icon-plus"></i>
                        </a>
                    @endif
                @endrole
            </div>
            <div class="tk-asidenavbar_wrap">
                <ul class="tk-asidenavbar">
                    <li>
                        <a @if( request()->routeIs('dashboard') ) class="active" @endif href="{{route('dashboard')}}">
                            <i class="icon-layers"></i>
                            <span>{{__('navigation.dashboard')}}</span>
                        </a>
                    </li>
                    @if(projectEnabled()) 
                        <li @if( request()->routeIs('search-projects') || request()->routeIs('project-listing') ) class="active" @endif>
                            <a href="javascript:void(0)">
                                <i class="icon-external-link"></i>
                                <span>{{__('navigation.manage_projects')}}</span>
                                <i class="tk-arrownicon icon-chevron-down"></i>
                            </a>
                            <ul @class([
                                    'active tk-asidedropdown' => request()->routeIs('search-projects') || request()->routeIs('project-listing'),
                                    'tk-asidedropdown'        => !request()->routeIs('search-projects') && !request()->routeIs('project-listing'),
                                ]) @style([
                                    'display:block' => request()->routeIs('search-projects') || request()->routeIs('project-listing'),
                                ])>
                                <li >
                                    <a @if( request()->routeIs('search-projects') ) class="active" @endif href="{{ route('search-projects') }}">{{ __('navigation.explore_all_projects') }}</a>
                                </li>
                                <li>
                                    <a @if( request()->routeIs('project-listing') ) class="active" @endif href="{{ route('project-listing') }}">{{ __('navigation.my_project') }}</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if(gigEnabled())
                        <li @if( request()->routeIs('gig-list') || request()->routeIs('gig-orders') || request()->routeIs('search-gigs')  ) class="active" @endif>
                            <a href="javascript:void(0)">
                                <i class="icon-file-text"></i>
                                <span>{{__('navigation.manage_gigs')}}</span>
                                <i class="tk-arrownicon icon-chevron-down"></i>
                            </a>
                            <ul @class([
                                    'active tk-asidedropdown' => request()->routeIs('gig-list') || request()->routeIs('gig-orders') || request()->routeIs('search-gigs'),
                                    'tk-asidedropdown'        => !request()->routeIs('gig-list') && !request()->routeIs('gig-orders') && !request()->routeIs('search-gigs'),
                                ]) @style([
                                    'display:block' => request()->routeIs('gig-list') || request()->routeIs('gig-orders') || request()->routeIs('search-gigs'),
                                ])>

                                @role('seller')
                                    <li>
                                        <a @if( request()->routeIs('gig-list') ) class="active" @endif href="{{route('gig-list')}}">
                                            <!-- <i class="icon-file-text"></i> -->
                                            <span>{{__('navigation.my_gigs')}}</span>
                                        </a>
                                    </li>
                                @endrole
                                <li>
                                    <a @if( request()->routeIs('gig-orders') ) class="active" @endif href="{{route('gig-orders')}}">
                                        <!-- <i class="icon-check-square"></i> -->
                                        <span>
                                            @role('seller')
                                                {{__('navigation.my_orders')}}
                                            @else
                                                {{__('navigation.gig_orders')}}
                                            @endrole
                                        </span>
                                    </a>
                                </li>
                                @role('buyer')
                                    <li>
                                        <a @if( request()->routeIs('search-gigs') ) class="active" @endif href="{{route('search-gigs')}}">
                                            <!-- <i class="icon-file-text"></i> -->
                                            <span>{{__('navigation.search_gigs')}}</span>
                                        </a>
                                    </li>
                                @endrole
                            </ul>
                        </li>
                    @endif    
                    @role('buyer')
                        <li>
                            <a @if( request()->routeIs('search-sellers') ) class="active" @endif href="{{route('search-sellers')}}">
                                <i class="icon-user"></i>
                                <span>{{__('navigation.search_seller')}}</span>
                            </a>
                        </li>
                    @endrole
                    <li>
                        <a @if( request()->routeIs('dispute-list') ) class="active" @endif href="{{route('dispute-list')}}">
                            <i class="icon-alert-triangle"></i>
                            <span>{{__('navigation.disputes')}}</span>
                        </a>
                    </li>

                    <li>
                        <a @if( request()->routeIs('invoices') ) class="active" @endif href="{{route('invoices')}}">
                            <i class="icon-shopping-bag"></i>
                            <span>{{__('navigation.invoices')}}</span>
                        </a>
                    </li>

                    <li>
                        <a @if( request()->routeIs('favourite-items') ) class="active" @endif href="{{route('favourite-items')}}">
                            <i class="icon-heart"></i>
                            <span>{{__('navigation.saved_items')}}</span>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="tk-usermenu">
                <li>
                    <a @if( request()->is('messenger') ) class="active" @endif href="{{ url('/messenger') }}"><i class="icon-message-square"></i><span>{{ __('general.message_heading') }}</span></a>
                </li>

                @role('buyer|seller')
                    <li class="tk-usermenu_account">
                        <a href="javascript:void(0)">
                            <i class="icon-credit-card"></i> <span>{{__('general.account_balance')}} <strong>{{ getUserWalletAmount() }}</strong></span>
                        </a>
                    </li>
                @endrole

                <li class="tk-logout">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><i class="icon-power"></i><span>{{ __('auth.logout') }}</span> </a>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
@endrole
