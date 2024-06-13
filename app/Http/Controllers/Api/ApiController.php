<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{

    // register api - POST (name , email , password , password_confirmation )
    public function register(Request $request){
        $request->validate([
            'name'=>"required|string",
            'email'=>"required|string|email|unique:users",
            'password'=>"required|string|min:5|max:12|confirmed",

        ]);

        User::create([
        "name"=>$request->name,
        "email"=>$request->email,
        "password"=>bcrypt($request->password)
        ]);

        return response()->json([
            "status" => true, 
            "message"=>"User registered Successfully",
            "data"=>[]
        ]);

    }

    // login api -  POST (email , password)
    
    public function login(Request $request){

        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        
        // $token = Auth::attempt([
        //     "email"=>$request->email,
        //     "password" => $request->password
        // ]);

        $token = auth()->attempt([
            "email"=>$request->email,
            "password" => $request->password
        ]);

        if(!$token){
            return response()->json([
                "status" => false,
                "message" => "Invalid login details"
            ]);
        }

        return response()->json([
            "status" => true,
            "message" => "User logged in",
            "token" => $token,
            "expires_in" => auth()->factory()->getTTL() * 60
        ]);

    }

    // profile api - GET(JWT Auth Token)

    public function profile(Request $request){
        // $userData = auth()->user() ;
        $userData = request()->user() ;

        return response()->json([
            "status" => true,
            "message" => "Profile Data",
            "user"=>$userData,
            "user_id"=>request()->user()->id,
            "email"=>$request->user()->email

        ]);

    }

    // refreshToken api - GET(JWT Auth Token)

    public function refreshToken(Request $request){
        $token=auth()->refresh();

        return response()->json([
            "status" => true,
            "message" => "Refresh Token",
            "token" => $token,
            "expires_in" => auth()->factory()->getTTL() * 60
        ]);

    }
 
    // logout api - GET(JWT Auth Token)

    public function logout(Request $request){
        auth()->logout();
        return response()->json([
            "status" => true,
            "message" => "User Logout"
        ]);
    }
    
}