<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
        // return request()->all();
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:8',
        ]);

        $data['password'] = Hash::make($data['password']);

        // input data
        User::create($data);

        return redirect('/login')->with('success', 'Registrasi Berhasil, Silahkan Login');
    }
}
