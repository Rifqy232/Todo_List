<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index ()
    {
        return view('todos.index', [
            'todos' => DB::table('todos')->orderByDesc('id')->get(),
        ]);
    }

    public function addTodo (Request $request)
    {
        DB::table('todos')->insert([
            'todo' => $request->todo,
        ]);

        return back();
    }

    public function editTodo ($id)
    {
        $task = DB::table('todos')->where('id', $id)->first();
        return view('todos.edit', [
            'item' => $task,
        ]);
    }

    public function updateTodo (Request $request, $id)
    {
        DB::table('todos')->where('id', $id)->update([
            'todo' => $request->todo,
        ]);

        return redirect('/');
    }

    public function destroy ($id)
    {
        DB::table('todos')->where('id', $id)->delete();

        return back();
    }
}
