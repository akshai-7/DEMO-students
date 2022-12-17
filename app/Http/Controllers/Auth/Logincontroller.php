<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Logincontroller extends Controller
{
    public function insert(Request $request){
        $request-> validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);
        $email=$request->input('email');
        $password=$request->input('password');


        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            $user = User ::where('email',$email)->first();

        Auth::login($user);
        return redirect('/home');
        }else{
            return redirect('/');
        }


    }


}


