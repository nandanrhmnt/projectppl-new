<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function form()
    {
        return view("auths.register");
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama'=>'required|min:4',
            'email'=>'required|email|unique:admins.email',
            'role'=>'required|in:admin,user',
            'password'=>'required|min:4|confirmed'
        ]);

        User::create([
            'nama'=> $request->nama,
            'email'=> $request->email,
            'role'=> $request->role,
            'password'=>bcrypt($request->password)
        ]);

        return redirect()->route('user.login')->with('pesan', 'berhasil');
    }
}
