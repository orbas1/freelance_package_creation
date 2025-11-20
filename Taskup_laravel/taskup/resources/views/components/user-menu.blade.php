@php
    $info = getUserInfo();
@endphp

    <div class="tk-userlogin sub-menu-holder">
        <a href="javascript:void(0);" id="profile-avatar-menue-icon" class="tk-hasbalance">
            <i class="icon-chevron-down"></i>
            <img src="{{asset($info['user_image'])}}" alt="{{ $info['user_image'] }}" />

            @role('buyer|seller')
                <div class="tk-wallet tk-walletinfo">
                    <h4>{{ $info['user_name'] }}</h4>
                    <span >{{ __('general.active_status') }}</span>
                </div>
                
                
              @endrole
        </a>
        <ul class="sub-menu">
            @role('buyer|seller')
                <li class="tk-switch-profile">
                    <div class="tk-expertswitch @role('buyer') tk-bgswtich @endrole">
                        @role('buyer')
                            <h2> {{ ucfirst( strtolower( __('general.switch_profile', ['user_role' => __('general.seller')])  ))}}</h2>
                            <p>{{ ucfirst( strtolower( __('general.switch_profile_desc', ['user_role' => __('general.buyer')]) ))}}</p>
                        @else
                            <h2>{{ ucfirst( strtolower( __('general.switch_profile', ['user_role' => __('general.buyer')]) ))}}</h2>
                            <p>{{ ucfirst( strtolower( __('general.switch_profile_desc', ['user_role' => __('general.seller')]) ))}}</p>
                        @endrole
                        <form method="POST" action="{{ route('switch-role') }}">
                            @csrf
                            <a class="tk-expert-anchor" href="{{ route('switch-role') }}" onclick="event.preventDefault(); this.closest('form').submit();"> 
                                {{ __('general.switch_role' )}}
                            </a>
                        </form>
                    </div>
                </li>
                <li>
                    <a @if( request()->routeIs('dashboard') ) class="active" @endif href="{{route('dashboard')}}">
                        <i class="icon-layers"></i>{{__('navigation.dashboard')}}
                    </a>
                </li>
                @role('seller')
                    <li class="tk-account-settings">
                        <a href="{{route('seller-profile',['slug' => $info['slug']])}}" target="_blank"> <i class="icon-user"></i>{{ __('navigation.profile') }} </a>
                    </li>
                @endrole
                <li class="tk-account-settings">
                    <a href="{{route('settings')}}"> <i class="icon-settings"></i>{{ __('navigation.settings') }} </a>
                </li>
                @if(packagesEnabled())
                    <li class="tk-account-settings">
                        <a href="{{route('packages')}}"> <i class="icon-package"></i>{{ __('navigation.packages') }} </a>
                    </li>
                @endif    
            @endrole
            @role('admin')
                <li class="tk-saveditems">
                    <a href="{{route('profile')}}"> <i class="icon-user"></i>{{ __('sidebar.profile') }} </a>
                </li>
                <li class="tk-saveditems">
                    <a href="{{route('optionbuilder')}}"> <i class="icon-settings"></i>{{ __('navigation.settings') }} </a>
                </li>
            @endrole
        </ul>
    </div>
