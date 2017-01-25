<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller {

    public function showWelcome() {
        return View::make('hello');
    }

    public function doLogin() {

        $userdata = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        // attempt to do the login
        if (Auth::attempt($userdata)) {
            return response()->json(array('success' => true, 'user' => Auth::user()), 200);
        } else {
            return response()->json(array('error' => 'unauthenticated'), 401);
        }
    }

}
