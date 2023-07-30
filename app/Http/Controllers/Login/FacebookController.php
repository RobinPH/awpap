<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserPermissionController;
use App\Models\User;
use App\Models\UserAddress;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function handleCallback()
    {
        try {
            //create a user using socialite driver facebook
            $user = Socialite::driver('facebook')->user();
            // if the user exits, use that user and login
            $finduser = User::where('facebook_id', $user->id)->first();

            if($finduser){
                //if the user exists, login and show dashboard
                Auth::login($finduser);

                session()->flash("info", "Logged in using " . $user->email);
                return redirect()->route('home');
            } else {
                //user is not yet created, so create first

                $newUser = User::query()->updateOrCreate([
                    'email' => $user->email,
                ],
                [
                    'name' => $user->name,
                    'email' => $user->email,
                    'address_id' => UserAddress::create()->id,
                    'google_id'=> $user->id,
                    'password' => encrypt('')
                ]);

                UserPermissionController::addDefaultPermission($newUser);

                $newUser->save();
                Auth::login($newUser);

                session()->flash("info", "Registered using " . $user->email);
                return redirect()->route("home");
            }
            //catch exceptions
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
