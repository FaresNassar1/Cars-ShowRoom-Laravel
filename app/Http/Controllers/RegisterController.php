<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class  RegisterController extends Controller
{


    public function login()
    {

        return view('register/login');
    }



    public function signup()
    {

        return view('register/signup');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12',
            'password_confirmation' => 'required',
            'phone' => 'required'

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $res = $user->save();
        if ($res) {
            return redirect()->route('register.login')->with('success', 'You have registered successfully. Please log in.');
        } else {
            return back()->with('faild', 'something wrong');
        }
    }
    public function loginAdmin(Request $request)
    {
        $cred =   $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:5|max:12',
        ]);

        // $user = User::where('email', '=', $request->email)->first();
        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         $request->session()->put('loginId', $user->id);
        //         return redirect('dashboard');
        //     } else {

        //         return back()->with('faild', 'password not mathes');
        //     }
        // }
        if (Auth::attempt($cred)) {
            return redirect('dashboard');
        } else {
            return back()->with('faild', 'This email is not regestred');
        }
    }


    public function dashboard()
    {
        $data = [];

        if (Session::has('loginId')) {
            $data = User::where('email', '=', Session::get('loginId'))->first();
        }

        return view('dashboard', compact('data'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function admin()
    {

        return view('admin-home');
    }

    public function loginUser(Request $request)
    {

        return view('admin-home');
    }
}
