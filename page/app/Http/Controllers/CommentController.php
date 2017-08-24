<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Thread;

class CommentController extends Controller
{
    public function __construct() {
    	if (!$this->middleware('auth')) {
    		return back()->withErrors([
    			"message" => "You need to sign in to comment on this thread"
    		]);
    	}
    }

    public function store(Thread $thread) {
    	// Validate the form
    	$this->validate(request(), [
    		"content" => "required",
    	]);

    	// Create thread
    	Comment::create([
    		"user_id" => auth()->user()->id,
    		"thread_id" => $thread->id,
    		"content" => request("content")
    	]);

    	// Redirect
    	return back();
    }
}
