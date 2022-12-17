<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class Registercontroller extends Controller
{
    public function store(Request $request){

        $request->validate(
            [
                'name'=>'required|regex:/^[A-Z]+$/i',
                'email'=>'required|email',
                'password'=>'required|min:8'
            ]);


            $user = new User;
            $user->name = $request ->input('name');
            $user->email = $request ->input('email');
            $user->password = Hash::make($request ->input('password'));
            $user ->save();


            return redirect('/');

    }

}

