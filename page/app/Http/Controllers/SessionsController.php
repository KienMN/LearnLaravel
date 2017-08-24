<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	public function __construct() {
    	$this->middleware('guest')->except(['destroy']);
    }

    // Route to login page
    public function create() {
    	return view('sessions.create');
    }

    // Log out function
    public function destroy() {
    	auth()->logout();

    	return redirect()->home();
    }

    // Log in function
    public function store() {
    	// Validate the form
    	$this->validate(request(), [
    		"email" => "required|email",
    		"password" => "required"
    	]);

    	// Sign In
    	if (! auth()->attempt(request(['email', 'password']))) {
    		return back()->withErrors([
    			"message" => "Please check your credentials and try again"
    		]);
    	}

    	return redirect()->home();

    }
}
