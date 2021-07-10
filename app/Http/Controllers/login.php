<?php

namespace App\Http\Controllers;

//use CreateUsersTable;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Support\Str;
//use App\Models\User;


class login extends Controller
{
    //
    public function login()
    {
        return view('log/login');
    }
    public function loginpost(Request $request)
    {
        if(Auth::attempt($request->only('email','password')))
        {
            return redirect('/');
        }
        return redirect('/log/login');
    }



    public function register()
    {
        return view('/log/register');
    }
    public function registeruser(Request $request)
    {
        $this->validate($request,[
            'nametext' => 'required|min:5|max:15',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:20',
        ]);
        $user = User::create([
            'name' => $request->nametext,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        //kirimemail
        event(new Registered($user));
        //diderect ke halaman login
        return redirect('/log/login');
        //dd($request);
        //return view ('log/register');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/log/login');
    }
}
