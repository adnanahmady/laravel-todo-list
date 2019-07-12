<?php

function gravatar_url($email) {
    return "http://www.gravatar.com/avatar/" . md5($email) . '?s=35';
}

function userTaskLink(\App\Task $task) {
    return route('user.tasks.show', [$task->user->username, $task->id]);
}
