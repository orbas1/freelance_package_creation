<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class SendMessageController extends Controller
{
    public function sendMessage(Request $request){
        $to   = $request->to;
        $message    = $request->message;
        $user_id    = Auth::user()->id;
        return sendMessage($to, $user_id, $message);
    }
}
