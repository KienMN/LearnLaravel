<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;

class ThreadController extends Controller
{
    public function __construct() {
    	$this->middleware('auth')->except(['show', 'index']);
    }

    public function show() {
    	$threads = Thread::orderBy('created_at', 'desc')->get();
    	return view('forum.show', compact('threads'));
    }

    public function create() {
    	return view('forum.create');
    }

    public function index(Thread $thread) {
    	$comments = $thread->comment()->get();
    	return view('forum.index', compact('thread', 'comments'));
    }

    public function store() {

    	// Validate the form
    	$this->validate(request(), [
    		"title" => "required",
    		"body" => "required"
    	]);

    	// Create thread
    	Thread::create([
    		"user_id" => auth()->user()->id,
    		"title" => request("title"),
    		"body" => request("body")
    	]);

    	// Redirect
    	return redirect()->action('ThreadController@show');
    }
}
