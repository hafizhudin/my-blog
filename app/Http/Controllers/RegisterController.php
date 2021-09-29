<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.index', [
            'title' => 'Sign Up'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users,username'],
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']); --> cara 1
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);



        // $request->session()->flash('success', 'Daftar berhasil! Silahkan masuk!'); --> cara panjang
        return redirect('/login')->with('success', 'Daftar berhasil! Silahkan masuk!'); // --> cara pendek
    }
}
