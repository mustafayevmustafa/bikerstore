<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use App\Models\User;
class SocialController extends Controller
{
    #######  LOGIN FACEBOOK #############
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function loginWithFacebook()
    {
        $user = Socialite::driver('facebook')->stateless()->user();
        $findUser = User::where('facebook_id',$user->id)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect('/');
        }else{
            $new_user = new User;
            $new_user->name = $user->name;
            //$new_user->surname = $user->surname;
            //$new_user->phone = $user->phone;
            $new_user->email = $user->email;
            $new_user->facebook_id = $user->id;
            $new_user->password = bcrypt(12345678);
            $new_user->save();
            Auth::login($new_user);
            return redirect('/');
        }
    }

     #######  LOGIN GOOGLE #############
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function loginWithGoogle()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $findUser = User::where('google_id',$user->id)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect('/');
        }else{
            $new_user = new User;
            $new_user->name = $user->name;
            //$new_user->surname = $user->surname;
            //$new_user->phone = $user->phone;
            $new_user->email = $user->email;
            $new_user->google_id = $user->id;
            $new_user->password = bcrypt(12345678);
            $new_user->save();
            Auth::login($new_user);
            return redirect('/');
        }
    }
}
