<x-guest-layout :title="__('general.register')">
    <x-auth-card :title="__('auth.register')" :description="__('auth.register_desciption')" :auth_bg="$auth_bg" :sitelogo="$sitelogo">
        
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" class="tk-themeform tk-loginform tk-signupform " action="{{ route('register') }}">
            @csrf
            <fieldset>
                <div class="tk-themeform__wrap">
                    <!-- First Name -->
                    <div class="form-group-half">
                        <label class="tk-label">{{ __('auth.first_name') }}</label>
                        <div class="tk-placeholderholder">
                            <x-input id="first_name" type="text" name="first_name" placeholder="{{ __('auth.first_name_placeholder') }}" :value="old('first_name')" required autofocus />
                        </div>
                    </div>

                    <!-- Last Name -->
                    <div class="form-group-half">
                        <label class="tk-label">{{ __('auth.last_name') }}</label>
                        <div class="tk-placeholderholder">
                            <x-input id="last_name" type="text" name="last_name" placeholder="{{ __('auth.last_name_placeholder') }}" :value="old('last_name')" required autofocus />
                        </div>
                    </div>

                    <!-- Email Address -->
                    <div class="form-group">
                        <label class="tk-label">{{ __('auth.email') }}</label>
                        <div class="tk-placeholderholder">
                            <x-input id="email" type="email" name="email" placeholder="{{ __('auth.register_email') }}" :value="old('email')" required />
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="form-group-half">
                        <label class="tk-label">{{ __('auth.password') }}</label>
                        <div class="tk-placeholderholder">
                            <x-input id="password" type="password" name="password" placeholder="{{ __('auth.register_password') }}" required autocomplete="new-password" />
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group-half">
                        <label class="tk-label">{{ __('auth.confirm_password') }}</label>
                        <div class="tk-placeholderholder">
                            <x-input id="password_confirmation"  type="password" placeholder="{{ __('auth.confirm_password_placeholder') }}" name="password_confirmation" required />
                        </div>
                    </div>

                    <!-- User Type -->
                    <div class="form-group">
                        <label class="tk-label">{{ __('auth.choose_role') }}</label>
                        <div class="form-group-radio">
                            <div class="tk-form-checkbox">
                                <x-input-radio id="buyer" class="form-check-input tk-form-check-input-sm tk-payout-opt" type="radio" name="user_type" :value="old('user_type', 'buyer')" :checked="old('user_type') == 'buyer' ? true : false"   required />
                                <x-label class="form-check-label" for="buyer" :value="__('auth.buyer')" />
                            </div>
                            <div class="tk-form-checkbox">
                                <x-input-radio id="seller" class="form-check-input tk-form-check-input-sm tk-payout-opt" type="radio" name="user_type" :value="old('user_type', 'seller')" :checked="old('user_type') == 'seller' ? true : false"    required />
                                <x-label class="form-check-label" for="seller" :value="__('auth.seller')" />
                            </div>
                        </div>
                    </div>

                    <!-- Agree term & conditions -->
                    <div class="tk-login-condition form-group">
                        <x-input-radio id="user_terms_agree" class="form-check-input form-check-input-lg" type="checkbox" name="user_terms_agree" :value="old('user_terms_agree', 'yes')" :checked="old('user_terms_agree') == 'yes' ? true : false"  required />
                        <label for="user_terms_agree" class="form-check-label"> <span>{{ __('auth.read_all_terms') }}<a target="_blank" href="#"> {{ __('auth.terms_conditions') }}</a> {{ __('auth.and') }} <a target="_blank" href="#"> {{ __('auth.privacy_policy') }}</a> </span> </label>
                    </div>

                    <div class="tk-popup-terms">
                        <x-button>
                            {{ __('auth.join_now') }}
                        </x-button>
                    </div>
                    <div class="tk-lost-password">
                        <span>
                            {{__('auth.join_us_today')}}<a href="{{route('login')}}">{{ __('auth.login') }}</a>
                        </span>
                    </div>
                </div>
            </fieldset>
        </form>
    </x-auth-card>
</x-guest-layout>
