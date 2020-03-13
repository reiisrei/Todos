<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){

        //fetch all todos from database
        $todos = Todo::all();
        //display them in the todos.index page
        return view('todos.index')->with('todos', $todos);
    }

    public function show($todoId){

        $todo = Todo::find($todoId);
        return view('todos.show')->with('todo', $todo);
    }

    public function create(){
        return view('todos.create');
    }
}
