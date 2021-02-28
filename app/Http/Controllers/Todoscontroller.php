<?php

namespace App\Http\Controllers;

use Session;
use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Todoscontroller extends Controller
{
    //
    public function index()
    {

        $todos = Todo::all();
        return view('todos')->with('todos', $todos);
    }

    public function store(Request $request)
    {
       $todo = new Todo;
        $todo -> todo = $request->todo;
        $todo->save();

        Session::flash('success', 'you todo was created');
    return redirect()->back();

    }
    public function delete($id){

        $todo = Todo::find($id);

        $todo -> delete();

        Session::flash('success', 'you todo was deleed');
        return Redirect() -> back();
    }

    public function update($id){

        $todo = Todo::find($id);

        return view('update')-> with('todo', $todo);
    }
    public function save(Request $request, $id){
        
        $todo = Todo::find($id);

        $todo-> todo = $request->todo;

        $todo -> save();

        Session::flash('success', 'you todo was saved');
    return redirect()-> route('todos');

    }
    public function completed($id){
        $todo =Todo::find($id);

        $todo -> completed = 1;

        Session::flash('success', 'you todo was mark as completed');
        $todo -> save();
    }
}
