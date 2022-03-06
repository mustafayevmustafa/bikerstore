<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use App\Models\User;
class SocialController extends Controller
{
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
            $new_user->facebook_id = $user->email;
            $new_user->password = bcrypt(12345678);
            $new_user->save();
            Auth::login($new_user);
            return redirect('/');
        }
    }
}
