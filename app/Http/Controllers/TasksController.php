<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Custom\Exceptions\ValidatorException;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Custom\Services\TaskCreatorService;
use Custom\Validators\TaskValidator;

class TasksController extends Controller
{
    protected $taskCreator;

    public function __construct()
    {
        $this->taskCreator = new TaskCreatorService(new TaskValidator());
    }

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
        try {
            $this->taskCreator->make(Input::all());
        } catch (ValidatorException $exception) {
            return redirect()->back()->withInput()->withErrors($exception->getErrors());
        }

        return redirect()->route('tasks');
    }
}
