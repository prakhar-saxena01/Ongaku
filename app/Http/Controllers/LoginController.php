<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;


class LoginController extends  Controller
{
    public function authenticated() {
        if(auth()->user()->hasRole('admin'))
            return redirect('/admin/dashboard');
        return redirect('index');

    }
    public function fbsubmit(){
        return Socialite::driver('facebook')->redirect();
    }

    public function fbres() {
        $usr = Socialite::driver('facebook')->user();

        return redirect()->route('index');  //change to whatever place you like
    }

    function logout() {
        Auth::logout();
        return redirect('login');
    }

}

?>
