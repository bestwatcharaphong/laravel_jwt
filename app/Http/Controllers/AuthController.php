<?php

namespace App\Http\Controllers;
use JWTAuth;
use JWTexception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        
        $credentials = $request->only(['email','password']);
        try{
            if(!$token = JWTAuth::attempt($credentials)){
                return response()->json([
                    'status' => false,
                    'message' => "invalid credentials"
                ]);
            }
        } catch (JWTexception $e) {
            return response()->json([
                'status' => false,
                'message' => "count not create token"
            ]);
        }

        return response()->json([
            'status' => true,
            'response' => Auth::guard('api')->user(),
            'token' => $token,
            'message' => "Login Success"
        ]);
        
    }
}
