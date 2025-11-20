<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @php
            $sitInfo        = getSiteInfo();
            $siteFavicon    = $sitInfo['site_favicon'];
            $siteTitle      = $sitInfo['site_name'];
            $siteDarkLogo   = $sitInfo['site_dark_logo'];
            $siteLiteLogo   = $sitInfo['site_lite_logo'];

            $adsense_client_id  = setting('_adsense.adsense_client_id');
            $rtl                = setting('_site.rtl');
            $rtl_class          = !empty($rtl) && $rtl == 1 ? 'tk-rtl' : '';
            $currentURL         = url()->current();
            $siteLogo           = url('/') == $currentURL ? $siteDarkLogo : $siteLiteLogo;
        @endphp
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <x-meta-content :OgContent="$OgContent ?? null" :siteName="$siteTitle ?? null" :page="$page ?? null" :title="$title ?? null"/>

        @if( !empty($siteFavicon) )
            <link rel="icon" href="{{ asset('storage/'.$siteFavicon) }}" type="image/x-icon">
        @endif
        <script defer src="{{ asset('js/main.js')}}"></script>
        @vite([
            'public/common/css/bootstrap.min.css',
            'public/css/feather-icons.css',
            'public/css/fontawesome/all.min.css',
            'public/css/fontawesome/font-awesome-six.css',
            'public/common/css/select2.min.css',
            'public/common/css/jquery.mCustomScrollbar.min.css',
            'public/common/css/jquery-confirm.min.css',
            'public/css/swiper.min.css',
        ])
        @if(empty($page))
            @livewireStyles
        @endif
        @stack(config('pagebuilder.site_style_var'))
            <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        @if( !empty($rtl_class) )
            <link rel="stylesheet" type="text/css" href="{{ asset('css/rtl.css') }}">
        @endif

        @if( ( !empty($include_menu) || !empty($site_view) ) && !empty($adsense_client_id) )
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client={{$adsense_client_id}}" crossorigin="anonymous"></script>
            <script>
                (adsbygoogle=window.adsbygoogle||[]).pauseAdRequests=1;
                (adsbygoogle=window.adsbygoogle||[]).push({google_ad_client: "{{$adsense_client_id}}", enable_page_level_ads: true});
            </script>
        @endif
    </head>
    <body class="tk-homepage wr-overxhidden {{ $rtl_class }}">

        <main class="min-h-screen tk-main-wrapper">
            <x-header :page="$page ?? null" />
            @yield(config('pagebuilder.site_section'))

            @if(Auth::guest() || !empty($page))
                <x-footer />
            @endif
        </main>

        @vite([
            'public/common/js/jquery-confirm.min.js',
        ])

        <script src="{{ asset('common/js/jquery.min.js') }}"></script>
        @stack(config('pagebuilder.site_script_var'))
        @include('layouts.footer_scripts')
        @if(empty($page))
            @livewireScripts
        @endif
    </body>
</html>
