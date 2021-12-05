<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function authentication(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        $user = user::where('name', "=", $request->username)->first();
        if ($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('username', $user->name);
                return redirect('dashboard');
            }else{
                return back()->with('failure', 'user login failed, password did not match');
            }
        }else{
            return back()->with('failure', 'user login failed, username is wrong');
        }
        
   
    }
    public function registration(Request $request)
    {
        $request->validate([
            'username' => 'required|min:5',
            'password' => 'required|min:5',
            'email' => 'required|email|unique:users'
        ]);

        $user = new user();
        $user->name = $request->username;
        $user->password = hash::make($request->password);
        $user->email = $request->email;
        $res = $user->save();
        if($res){
            return back()->with('success', 'User Registrated successfully!!...');
        }else{
            return back()->with('falure', 'User Registrated successfully!!...');
        }
    }
}
