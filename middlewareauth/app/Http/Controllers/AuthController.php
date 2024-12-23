<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class AuthController extends Controller
{
    //
      use HasApiTokens, HasFactory, Notifiable;
    public function createUser(CreateUserRequest $request){
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return response()->json([
            'status'=>200,
            'message'=>'User created successfully',
            'token'=>$user->createToken("token")->plainTextToken
        ],200);
    }

    public function loginUser(LoginRequest $request){
        if(!Auth::attempt($request->only('email','password'))){
            return response()->json([
                'status'=>401,
                'message'=>'Invalid login details'
            ],401);

        }
        $user = User::where('email',$request->email)->first();
        return response()->json([
            'status'=>200,
            'message'=>'User logged in successfully',
            'token'=>$user->createToken("token")->plainTextToken
        ],200);

    }
}
