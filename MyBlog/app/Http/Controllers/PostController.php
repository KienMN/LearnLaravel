<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {
    	$posts = Post::orderBy('created_at', 'desc')->get();

    	return view('posts.index', compact('posts'));
    }

    public function create() {
    	return view('posts.create');
    }

    public function show(Post $post) {
    	return view('posts.post', compact('post'));
    }

    public function store() {

    	// dd(request()->all());

    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);

    	auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        // Post::create([

        //     'user_id' => auth()->user()->id,

        //     'title' => request('title'),

        //     'body' => request('body')
        // ]);

    	return redirect('/');

    }
}
