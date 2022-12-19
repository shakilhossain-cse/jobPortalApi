<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //register user
    public function register(Request $request)
    {
        // validate user input 
        $feilds = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);
        // create user 
        $user = User::crete([
            'name' => $feilds['name'],
            'email' => $feilds['email'],
            'password' => bcrypt($feilds['password'])
        ]);
        // genarate Token
        $token = $user->createToken('myapptoken')->plainTextToken;
        
        $response = [
            'user' => $user,
            'token' => $token
        ];
        // send response
        return response($response,201);
    }
};
