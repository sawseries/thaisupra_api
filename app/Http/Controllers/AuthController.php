<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function PaLogin(Request $request)
    {
        $user = User::where([
        'email' => $request->email, 
        'password' => $request->password
        ])->first();

        if($user)
        {  
            Auth::login($user);
            $accessToken = auth()->user()->createToken('authToken')->accessToken;
            return response(['success'=>true,
                'user' => $user,
                'access_token' => $accessToken]);            
        }else{
            return response()->json(['success'=>false, 'message' => 'This User does not exist, check your details'], 400);
        }
    }
}
