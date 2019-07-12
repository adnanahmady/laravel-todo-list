<?php
/**
 * contains Users Tasks Controller
 *
 * @author adnan ahmady <adnan.ahmady1394@gmail.com>
 */
namespace App\Http\Controllers;

use App\User;
use App\Task;
use Illuminate\Support\Facades\View;

/**
 * Class UsersTasksController
 *
 * @package App\Http\Controllers
 */
class UsersTasksController extends Controller {
    /**
     * tasks main route method
     *
     * @param $username
     * @return \Illuminate\Contracts\View\View
     */
    public function index($username) {
        $tasks = User::byUsername($username)->tasks;

        return View::make('tasks.index', compact('tasks'));
    }

    /**
     * show task route method
     * 
     * @param $username
     * @param $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($username, $id) {
        $task = Task::find($id, $username);

        return View::make('tasks.show', compact('task'));
    }
}
