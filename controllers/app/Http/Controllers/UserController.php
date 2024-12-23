<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users=DB::select('select * from users');
        return view('user.index',compact('users'));
    }
    public function create(){
        $user=new User;
        $user->name='John Doe';
        $user->email='demo@email.com';
        $user->password=Hash::make('password');
        $user->age=30;
        $user->address='123 Main Street, New York, NY';
        $user->zip_code=10001;
        $user->save();

        User::create([
            'name'=>'Jane Doe',
            'email'=>'jane@email.com',
            'password'=>Hash::make('password'),
            'age'=>25,
            'address'=>'456 Main Street, New York, NY',
            'zip_code'=>10001

        ]);

        User::create([
            'name'=>'James Doe',
            'email'=>'doe@gmail.com',
            'password'=>Hash::make('password'),
            'age'=>35,
            'address'=>'789 Main Street, New York, NY',
            'zip_code'=>10001
        ]);

        return redirect()->route('user.index');
    }

}
