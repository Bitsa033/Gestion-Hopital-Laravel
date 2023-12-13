<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUsersRequest;
use App\Models\User;
use App\Models\UserKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
     /**
     * Show all data users
     */
    function index()
    {
        if (!Auth::user()) {
           
            return redirect('/');
        }

        $user= Auth::user();
        $users=User::all();
        // $user= User::findOrfail(1);
        // dd($user);

        return view('users.show',[
            'users'=>$users,
            // 'user'=>$user
        ]);
    }

     /**
     * Show one data user.
     */
    public function show($id) {
        if (!Auth::user()) {
            return redirect('/');
        }

        $user= User::findOrfail($id);
        $user_email=$user->email;
        $password=DB::table('user_keys')->where('email', $user_email)->first(['password']);
        // dd($password->password);
        return view('users.edit',['user'=>$user,'password'=>$password]);
    }

    /**
     * Print all data users.
     */
    public function printUsers()
    {
        if (!Auth::user()) {
            return redirect('/');
        }

        $users= User::all();
        
        return view('printer.users',[
            'users'=>$users,
            
        ]);
    }

    /**
     * Print one data user.
     */
    public function printUser()
    {
        if (!Auth::user()) {
            return redirect('/');
        }

        $user= Auth::user();
        
        return view('printer.user',[
            'users'=>$user,
            
        ]);
    }

    /**
     * Show the loginForm
     */
    function login()
    {
        if (Auth::user()) {
            return redirect('audiences');
        }

        return view('auth.loginForm',[ ]);
    }

    /**
     * Show the registerForm
     */
    function register() {
        
        return view('auth.registerForm');
    }

    /**
     * Update the specified user resource after a valid registration.
     */
    function update(UpdateUsersRequest $request,$id){

        $request->validated($request->all());
        $user= User::findOrfail($id);
        $user_key= UserKey::findOrfail($id);
        $user_email=$user->email;
        $password=DB::table('user_keys')->where('email', $user_email)->first(['password']);
       
        $user_key->update([
            "email"=>$request->email,
            "password"=>$request->password
        ]);
        
        $user->update([
            "name"=>$request->name,
            'phone' => $request->phone,
            'adress' => $request->adress,
            "email"=>$request->email,
            "type"=>$request->type,
            "password"=>$request->password
        ]);

        return redirect('users')->with('success','Donnée modifiée avec sucès!');
        
    }

    /**
     * Update the specified user resource after a valid registration.
     */
    function delete($id){
        $user= User::destroy($id);
       
        return redirect('users')->with('success','Donnée suppriméé avec sucès!');
        
    }
}
