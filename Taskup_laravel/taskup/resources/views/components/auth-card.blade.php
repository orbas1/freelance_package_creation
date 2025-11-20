@props(['description', 'sitelogo', 'auth_bg'])

<!-- <div class="tk-loginconatiner tk-loginconatiner-two" @if( !empty($auth_bg) ) style="background-image: url('{{asset('storage/'.$auth_bg)}}')" @endif> -->
<div class="tk-loginconatiner">
    <div class="tk-login-content">
        <div class="tk-login-info">
            @if( !empty($sitelogo) )
                <a href="{{ url('/')}}"><img src="{{asset('storage/'.$sitelogo)}}" alt="{{ __('general.logo') }}" /></a>
            @else
                <a href="{{ url('/')}}"><img src="{{asset('demo-content/logo.png')}}" alt="{{ __('general.logo') }}" /></a>
            @endif
            @if( !empty($description) )<span>{{$description}}</span>@endif
        </div>
        {{ $slot }}
    </div>
    <div class="tk-login-banner">
        @if( !empty($auth_bg) )
            <figure class="tk-login-img">
                <img src="{{asset('storage/'.$auth_bg)}}" alt="login image">
            </figure>
        @endif
    </div>
</div>