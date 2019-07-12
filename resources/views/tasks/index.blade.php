@extends('layout.app')

@section('title', 'Tasks')

@section('header', 'Tasks')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-light">
                <div class="card-header">
                    <div class="card-title">
                        <span class="h3">
                            Content
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <ul class="list-group">
                                @foreach($tasks as $task)
                                    <li class="list-group-item-dark list-group-item list-group-item-action">
                                        <a href="{{ route('user.tasks', $task->user->username) }}"
                                           class="d-inline-block text-decoration-none">
                                            <img
                                                src="{{ gravatar_url($task->user->email) }}"
                                                alt="{{ $task->user->email }}"
                                                class="mr-2 rounded"
                                            >
                                        </a>
                                        <a
                                            href="{{ userTaskLink($task) }}"
                                            class="d-inline-block text-decoration-none text-dark"
                                        >
                                            {{ $task->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
