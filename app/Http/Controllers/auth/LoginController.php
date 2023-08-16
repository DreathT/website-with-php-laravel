<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\WebsiteController;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function show(Request $request) {

        /*
        if($request -> email == null || $request -> password == null){

            redirect() -> back();

        }
        */

        $data = new WebsiteController();

        return $data -> index();

    }

}
