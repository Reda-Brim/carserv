<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    function create(Request $request){
        $request->validate([
            'cin'=>'required|max:10',
            'prenom'=>'required|max:20',
            'nom'=>'required|max:20',
            'telephone'=>'required|max:10',
            'picture'=>'nullable',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'


        ]);


        $user = new User();
        $user->cin=$request->cin;
        $user->prenom=$request->prenom;
        $user->nom=$request->nom;
        $user->telephone=$request->telephone;
        
        $user->email=$request->email;
        if($request->hasfile('picture'))
        {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/Clients/', $filename);
            
            $user->picture=$filename;
        }
        
        
        $user->password = $request->password;
        $save = $user->save();

        if( $save ){
            return redirect()->back()->with('succes','enregistré avec succès');
        }else{
            return redirect()->back()->with('echec','Quelque chose est mal passé, échec de l\'enregistrement');
        }

         


    }

    function check(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|max:30'
         ],[
             'email.exists'=>'This email is not exists on users table'
         ]);
         $creds = $request->only('email','password');
         if( Auth::guard('web')->attempt($creds) ){
             return redirect()->route('user.home');
         }else{
             return redirect()->route('user.login')->with('fail','Incorrect credentials');
         }
    }

    function logout(Request $request){

        Auth::guard('web')->logout();
        return redirect('/');
    }
}
