<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
    public function index() {
    	
    	$tasks = Task::all();

		return view('test', compact('tasks'));

    }

    public function showTask(Task $task) {

		// $task = Task::find($id);

		// dd($task);

		// return $task;

		return view('test.task', compact('task'));

    }
}
