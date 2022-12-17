<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;



class Usercontroller extends Controller
{
    public function create(){
        return view('create user');
    }
    public function store(Request $request){


        $request->validate(
            [
                'name'=>'required|regex:/^[A-Z]+$/i',
                'age'=>'required|numeric',
                'contact'=>'required|numeric',
                'email'=>'required|email',
                'password'=>'required|min:8'
            ]);

        $name = $request->input('name');
        $age = $request->input('age');
        $contact = $request->input('contact');
        $email = $request->input('email');
        $password = $request->input('password');


        $user = new Login;
        $user->name = $name;
        $user->age = $age;
        $user->contact = $contact;
        $user->email = $email;
        $user->password= $password;
        $user->save();


        return redirect('/list');

    }
    public function list(){

        $users = Login::all();
        return view('list',['users'=>$users]);
    }
    public function edit($id){
        $user = Login::find($id);
        return view ('edit',['user'=>$user]);

    }
    public function update(Request $request,$id){
        $user = Login::find($id);
        $user->name = $request->input('name');
        $user->age = $request->input('age');
        $user->contact = $request->input('contact');
        $user->email = $request->input('email');
        $user->save();
        return redirect('/list');
    }
    public function delete($id){
        $user = Login::find($id);
        $user->delete();
        return redirect('/list');
    }
}
