<x-guest-layout :title="__('general.reset_password')">
    <x-auth-card :title="__('auth.reset_password')" :description="__('auth.forget_desciption')" :auth_bg="$auth_bg" :sitelogo="$sitelogo">
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" class="tk-themeform tk-loginform tk-forgetpass-form" action="{{ route('password.email') }}">
            @csrf
            <fieldset>
                <div class="tk-themeform__wrap">
                    <div class="form-group">
                        <label class="tk-label">{{ __('auth.email') }}</label>
                        <div class="tk-placeholderholder">
                            <x-input id="email" class="form-control" type="email" placeholder="{{ __('auth.email_palceholder') }}" name="email" :value="old('email')" required autofocus />
                        </div>
                    </div>
                    <div class="tk-popup-terms">
                        <x-button>
                              {{ __('auth.reset_link') }}
                              <i class="fa fa-arrow-right"></i>
                        </x-button>
                    </div>
                    <div class="tk-lost-password">
                        <span>
                            {{__('auth.join_us_today')}}<a href="{{route('register')}}">{{ __('auth.register') }}</a>
                        </span>
                    </div>
                </div>
            </fieldset>
        </form>
    </x-auth-card>
</x-guest-layout>
