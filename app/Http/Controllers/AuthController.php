<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tutor;      
use Illuminate\Support\Facades\Auth;//(Auth::attempt($credentials)
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function mainpage()
    {
        return view('mainpage');
    }

    public function welcome()       
    {
        return view('welcome'); 
    }
    public function login()
    {
        return view('login');
    }

    public function newsubject()
    {
        return view('newsubject');
    }

    
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required',
            'address' => 'required',
            'state' => 'required',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        $check->save();
        return redirect("login")->with('save', 'Success')->withErrors('error', 'Failed');; //sucess go to website url :login
    }

    public function create(array $data)
    {
        return tutor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']) ,//hash=sha1
            'phone' => $data['phone'],
            'address' => $data['address'],
            'state' => $data['state'],
       
        ]);
    }
    public function postLogin(Request $request)        //postlogin form in html will follow this function      
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
        }

        return redirect("mainpage")->withSuccess('You have invalid credentials');
    }
    
}
