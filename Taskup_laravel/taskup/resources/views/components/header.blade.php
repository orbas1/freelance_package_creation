@props(['page' => null])
@php
    $headerVariations = setting('_front.header_variation_for_pages');
    $headerVariation  = '';
    if (!empty($headerVariations)) {
        foreach ($headerVariations as $key => $variation) {
           if($variation['page_id'] == $page?->id) {
                $headerVariation = $variation['header_variation'];
                break;
           }
        }
    }
    $info=getUserInfo();
@endphp

@if(!empty($page) || Auth::guest() || $userInfo['roleName'] == 'admin')
    <!-- HEADER START -->
    <header class="tk-header tk-{{ $headerVariation }}">
        @if((in_array($page?->id, setting('_front.top_bar_for_pages') ?? []) || ( empty($page) && setting('_front.top_bar_for_default_pages') == 'yes')) && !empty(setting('_front.top_bar_content')))
            <div class="tk-header-topbar">
                <p class="tk-header-topbar-text">{!! setting('_front.top_bar_content') !!}</p>
            </div>
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="tk-headerwrap">
                        <div class="tk-logo">
                            @if( !empty($siteLogo) )
                                <a href="{{ url('/')}}"><img src="{{asset('storage/'.$siteLogo)}}" alt="{{ __('general.logo') }}" /></a>
                            @else
                                <a href="{{ url('/')}}"><img src="{{asset('demo-content/logo.png')}}" alt="{{ __('general.logo') }}" /></a>
                            @endif
                        </div>
                        <nav class="tk-navbar navbar-expand-xl">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#tenavbar" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="icon-menu"></i>
                            </button>
                            <div id="tenavbar" class="collapse navbar-collapse">
                                <ul class="navbar-nav tk-navbarnav">
                                    @if( !empty($headerMenu) && $headerMenu->count() > 0 )
                                        @foreach( $headerMenu as $menu)
                                            <x-menu-item :menu="$menu" />
                                        @endforeach
                                    @endif
                                    @role('admin')
                                        <a href="{{ route('profile') }}" class="tk-header-user tk-header-user-two">
                                            <img src="{{asset($info['user_image'])}}" alt="{{ $info['user_name'] }}">
                                            <div class="tk-header-dash">
                                                <h6>{{ __('general.dashboard') }}</h6>
                                                <span>{{ $info['user_name'] ?? '' }}</span>
                                            </div>
                                        </a>
                                    @endrole
                                </ul>
                            </div>
                        </nav>
                        <div class="tk-header-actions-wrapper">
                            @if(in_array($page?->id, setting('_front.header_search_for_pages') ?? []))
                                <x-search :header_position="true" />
                            @endif
                            @if(setting('_language.enable_language'))
                                @if(!empty(setting('_language.languages')))
                                    <form class="tk-switch-language" action="{{ route('switch-lang') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="tk-locale">
                                        <div class="tk-select tk-language-select">
                                            <i class="fa-regular fa-globe"></i>
                                            <select id="tk-lang" class="tk_category_opt tk-select2">
                                                @foreach(setting('_language.languages') as $key => $label)
                                                    <option value="{{ $label }}" {{ app()->getLocale() == $label ? 'selected' : '' }}>{{ __("pages.lang_$label") }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </form>
                                @endif
                            @endif
                            @guest
                                <div class="tk-headerwrap__right">
                                    <a href="{{ route('login') }}" class="tk-btn-login">{{ __( 'general.login' ) }} </a>
                                    <a href="{{ route('register') }}" class="tk-btn-signin">
                                        <span>{{ __( 'general.get_started' ) }} </span>
                                    </a>
                                </div>
                            @endguest
                            @role('admin')
                                <a href="{{ route('profile') }}" class="tk-header-user tk-header-user-one">
                                    <img src="{{asset($info['user_image'])}}" alt="{{ $info['user_name'] }}">
                                    <div class="tk-header-dash">
                                        <h6>{{ __('general.dashboard') }}</h6>
                                        <span>{{ $info['user_name'] ?? '' }}</span>
                                    </div>
                                </a>
                            @endrole
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->
@else
    <x-dashboard-menu />
@endif

@pushonce(config('pagebuilder.site_script_var'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        toggleMenu()
    });
</script>
@endpushonce
