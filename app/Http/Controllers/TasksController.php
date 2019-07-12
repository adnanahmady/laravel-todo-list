<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TasksController extends Controller
{
    public function index() {
        $tasks = Task::with('user')->get();

        return View::make('tasks.index', compact('tasks'));
    }

    public function show($id) {
        $task = Task::with('user')->findOrFail($id);

        return View::make('tasks.show', compact('task'));
    }
}
