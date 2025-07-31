<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

use function Termwind\render;

class TaskController extends Controller
{
    public function create(Request $request) {

        $request->validate([
            'contents' => 'required|string|max:250',
        ]);

        Task::create([
            'user_id' => $request->user()->id,
            'contents' => $request->contents,
        ]);

        $tasks = $request->user()->tasks;

        return redirect('/dashboard');
    }

    public function read(Request $request) {
        $tasks = $request->user()->tasks;

        return view('dashboard', compact('tasks'));
    }

    public function update() {

    }

    public function delete(Request $request) {
        $request->validate([
            'id' => 'integer|required|max:255'
        ]);
        $id = $request->id;
        $task = Task::where("id", $id)->first();
        $task->delete();
        return redirect('/dashboard');
    }
}
