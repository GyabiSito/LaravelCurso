<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $users=User::all();
        return response()->json($users);
    }
    public function detail($id){
        $user=User::find($id);
        if($user==null){
            return response()->json(['message'=>'User not found'], 404);
        }
        return response()->json($user);
    }
}
