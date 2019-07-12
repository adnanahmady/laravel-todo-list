<?php
/**
 * @author adnan ahmady <adnan.ahmady1394@gmail.com>
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Task Model
 *
 * @package App
 */
class Task extends Model
{
    /**
     * set user one to many relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Override find method
     *
     * @param $taskId
     * @param null $username
     * @return Task|Task[]|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model|null
     */
    public static function find($taskId, $username = null) {
        $task = static::with('user')->find($taskId);

        if ($username and @$task->user->username !== $username) {
            throw new ModelNotFoundException();
        }

        return $task;
    }

    /**
     * find tasks by their username
     *
     * @param $username
     * @return mixed
     */
    public static function byUsername($username) {
        return User::byUsername($username)->tasks;
    }
}
