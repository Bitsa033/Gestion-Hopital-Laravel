<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserKey;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    function resetPasswordForm() {
        return view('auth.passwords.reset');
    }

    function resetPassword(Request $request) {
        // $request->validate($request->all());
        $email=$request->get('email');
        $pwd=$request->get('password');
        $id_user=DB::table('users')->where('email', $email)->first(['id']);
        $id_user_key=DB::table('user_keys')->where('email', $email)->first(['id']);
        // dd($id);
        if ($id_user==null) {
            return redirect('resetPasswordForm')->with('email_not_exist','Email introuvable dans notre base de données!');
        } 
        else {
            $user= User::findOrfail($id_user->id);
            $user_key=UserKey::findOrfail($id_user_key->id);

            $user_key->update([
                "password"=>$pwd
            ]);

            $user->update([
                "password"=>$pwd
            ]);
            return redirect('/')->with('success','Vous venez de modifier votre code de sécurité');
            
        }
        
    }
}
