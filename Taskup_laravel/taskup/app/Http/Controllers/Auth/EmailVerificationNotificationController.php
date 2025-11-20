<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\EmailTemplate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Notifications\EmailNotification;
use App\Services\AuthService;
use Illuminate\Support\Facades\Notification;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::USER_LOGIN);
        }
        // send email to user
        $response = (new AuthService)->sendEmailVerification();

        return back()->with('status', 'verification-link-sent');
    }
}
