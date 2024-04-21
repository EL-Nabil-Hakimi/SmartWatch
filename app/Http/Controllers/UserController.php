<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ]);
        

        if ($request->password !== $request->c_password) {
            return back()->with('error', 'Password confirmation does not match');
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        session(['user_id' => $user->id]);

        return redirect('/');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Email or Password is incorrect');
        }
        
        session(['user_id' => $user->id]);
        
        return redirect('/');
    }

    public function logout()
    {
        session()->forget('user_id');
        return redirect('/login');
    }
}
