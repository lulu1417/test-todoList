<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use View;

class TodoController extends Controller
{
    public function todoList()
    {
        $todos = Todo::all();
        return View::make('todoList')->with('todos', $todos);

    }

    public function create(Request $request)
    {
        Todo::create([
            'todo' => $request->name,
            'isComplete' => false,
        ]);
        return redirect('todoList');
    }

    public function editView(Request $request)
    {
        $todos['id'] = $request->id;
        $todos['todo'] = $request->todo;

        return View::make('edit')->with('todo', $todos);
    }

    public function update(Request $request){
        $id = $request->id;
        $todo = Todo::find($id);
        if($todo->isComplete){
            $todo->update([
                'isComplete' => false,
            ]);
        }else{
            $todo->update([
                'isComplete' => true,
            ]);
        }
        return redirect('todoList');
    }

    public function edit(Request $request){
        $id = $request->id;
        $todo = Todo::find($id);
        $todo->update([
            'todo' => $request->todo,
        ]);
        return redirect('todoList');
    }

    public function destroy(Request $request){
        $id = $request->id;
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('todoList');
    }

}
