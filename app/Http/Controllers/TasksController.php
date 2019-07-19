<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class TasksController extends Controller
{
    public function index() {
        $tasks = Task::with('user')->get();
        $users = User::pluck('username', 'id');

        return View::make('tasks.index', compact('tasks', 'users'));
    }

    public function show($id) {
        $task = Task::with('user')->findOrFail($id);

        return View::make('tasks.show', compact('task'));
    }

    public function store() {
        $input = Input::all();
        $input['user_id'] = $input['assign'];
        unset($input['assign']);
        $task = new Task($input);

        if (! $task->save()) {
            return redirect()->back()->withInput()->withErrors($task->getErrors());
        }

        return redirect()->route('tasks');
    }
}
