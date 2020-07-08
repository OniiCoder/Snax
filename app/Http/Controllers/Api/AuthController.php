<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function register (Request $request){

    	// validate request data
    	$validatedData = $request->validate([
    		'name' => 'required|max:55',
    		'email' => 'email|required|unique:users',
    		'password' => 'required|confirmed'
    	]);

    	// encrypt password
    	$validatedData['password'] = bcrypt($request->password);

    	try {
    		//create new user
	    	$user = User::create($validatedData);

	    	// create access token for registered user
	    	$accessToken = $user->createToken('authToken')->accessToken;

	    	// return created user
	    	return response(
	    		[
	    			'user' => $user, 
	    			'access_token' => $accessToken
	    		]
	    	);
    	} catch (Exception $e) {
    		return $e;
    	}

    	

    }

    public function login (Request $request) {

    	// validate login data
    	$loginData = $request->validate([
    		'email' => 'email|required',
    		'password' => 'required'
    	]);

    	// check if the provided credentials matched DB credentials. If no, give 'invalid credentials response'
    	if (!auth()->attempt($loginData)) {
    		return response([
    			'message' => 'Invalid credentials'
    		]);
    	}

    	// if yes, create token for the logged in user
    	$accessToken = auth()->user()->createToken('authToken')->accessToken;

    	// return logged in user details and token data
    	return response(
    		[
    			'user' => auth()->user(), 
    			'access_token' => $accessToken
    		]
    	);

    }
}
