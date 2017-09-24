<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
    //
    public function __construct(){
       
         $this->middleware('auth')->except(['task','show']);
    }
    
    public function index(){

        $tasks = Task::latest()->get();

    	return view('post.create', compact('tasks'));
    }

    public function task(){

        $tasks = Task::latest()->get();

        return view('post.task', compact('tasks'));
    }

    public function create(Request $request){


        $request->validate([

            'Title' => 'required|min:5',

            'Task' => 'required|min:5'

            ]);


    	$Task = new Task;

    	$Task->title = $request['Title'];

    	$Task->task = $request['Task'];


    	$Task->user_id = auth()->user()->id;
    	$Task->task_id = 1;

    	$Task->save();



    	return redirect('/');

    }

    public function show(Request $request){

        $task = Task::latest()->where('id' ,'=' , $request['id'])->get();


        return view('post.show', compact('task'));
    }



}
