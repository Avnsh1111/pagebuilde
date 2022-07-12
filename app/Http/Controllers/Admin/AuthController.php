<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login() {
        return view('admin.auth.login');
    }

    public function checkLogin(Request $request) {

        $user = User::where('email',$request->email)->where('type',1)->first();

        if($user) {
            $credentials = $request->only('email','password');

            if (Auth::guard('admin')->attempt($credentials,true)) {
                return redirect()->route('admin.dashboard');
            }
        } else {
            return redirect()->back()->with('error','Incorrect email or password.');
        }
    }

    public function logout() {

        Session::flush();

        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
}
