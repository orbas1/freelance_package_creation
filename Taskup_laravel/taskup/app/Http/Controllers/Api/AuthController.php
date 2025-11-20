<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Services\AuthService;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponser;
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) {
        $registerService = new AuthService;
        $user = $registerService->registerUser($request);
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        $success['user'] =  new UserResource($user);
        $success['email_verfied'] =  $user->email_verified_at;
        Auth::login($user);
        return $this->success($success, 'User register successfully.');
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request) {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->plainTextToken;
            $success['user'] =  new UserResource($user);

            if (!empty($user->email_verified_at)) {
                return $this->success($success, 'User login successfully.');
            } else {
                return $this->error('not verified', $success);
            }
        } else {
            return $this->error('Credentials not matched.');
        }
    }


    /**
     * Resend Email
     *
     * @return \Illuminate\Http\Response
     */
    public function resendEmail() {
        $response = (new AuthService)->sendEmailVerification();

        if (!empty($response['type']) && $response['type'] == 'success' ) {
            return $this->success(null,'Email send successfully');
        } else {
            return $this->error( !empty($response['message']) ? $response['message'] : 'Something went wrong.' );
        }
    }

    /**
     * Reset Password
     *
     * @return \Illuminate\Http\Response
     */
    public function resetPassword(Request $request) {

        $response = (new AuthService)->resetPassword($request);

        if (!empty($response['type']) && $response['type'] == 'success' ) {
            return $this->success('Email send successfully');
        } else {
            return $this->error( !empty($response['message']) ? $response['message'] : 'Something went wrong.' );
        }
    }

    /**
     *  Logout
     *  @return \Illuminate\Http\Response
     */
    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();
        return $this->success(['message' => 'User logout successfully.'], 'Logout Success');
    }

    /**
     *  Logout
     *  @return \Illuminate\Http\Response
     */
    public function resetEmailPassword(Request $request) {
        $request->validate([
            'email' => 'required|email',
        ]);
        $response = (new AuthService)->resetEmailPassword($request);
        return $this->success(['message' => 'Reset password link sent to your email.'], 'Reset password link sent success');
    }


}
