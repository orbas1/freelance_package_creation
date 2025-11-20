<?php

namespace App\Http\Controllers\Auth;
use Session;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Profile;
use App\Models\UserAccountSetting;
use App\Models\EmailTemplate;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Notification;
use App\Providers\RouteServiceProvider;
use App\Services\AuthService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\App;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $sitInfo        = getSiteInfo();
        $sitelogo       = $sitInfo['site_dark_logo'];
        $auth_bg        = setting('_site.auth_bg');
        if( !empty($auth_bg) ){
            $auth_bg  = $auth_bg[0]['path'];
        }
        return view('front-end.auth.register', compact('sitelogo', 'auth_bg'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if (isDemoSite()) {
            session()->flash('message', __('general.demosite_res_txt'));
            session()->flash('title', __('general.demosite_res_title'));
            session()->flash('type',    'error');
            return redirect()->back(); 
        }
        $request->validate([
            'first_name'                => ['required', 'string', 'max:255'],
            'last_name'                 => ['required', 'string', 'max:255'],
            'user_type'                 => ['required', 'in:seller,buyer'],
            'user_terms_agree'          => ['required'],
            'email'                     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'                  => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // get requested role return role_id
        $role_id =  getRoleByName($request->user_type);

        if(!empty($role_id)){
            $registerService = new AuthService;
            $user = $registerService->registerUser($request);   
            Auth::login($user);
            $url = getLoginRedirect($user->id);
            return redirect()->intended($url);         
        } else {
            session()->flash('message', __('auth.role_not_exist'));
            session()->flash('type',    'error');
            return redirect()->back(); 
        }
    }
}
