<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class databasecontroller extends Controller
{
    public function login(Request $request)
    {
       $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        //dd($request->all());
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->with('message', "Welcome to Admin Pannel");
        }

       return redirect()->back()->with('message', "Your credentials are wrong. Re Enter!");
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("accesspage")->with('message', 'You are not allowed to access');
    }

    public function createuser(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("accesspage")->with('message', 'Your Account Sucessfully Created. Please Enter credentials');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
}
