<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserApiController extends Controller
{
    function getAllUsers(){
        $usersCollection = \App\User::all()->toJson();
        return response()->json($usersCollection);
    }
}
