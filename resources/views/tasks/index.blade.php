@extends('layout.app')

@section('title', 'Tasks')

@section('header', 'Tasks')

@section('head')
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >
@stop

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
                            <div class="list-group">
                                @foreach($tasks as $task)
                                    <div class="btn-group">
                                        <a href="{{ route('user.tasks', $task->user->username) }}"
                                           class="btn btn-info">
                                            <img
                                                src="{{ gravatar_url($task->user->email) }}"
                                                alt="{{ $task->user->email }}"
                                                class="mr-2 rounded"
                                            >
                                        </a>
                                        <a
                                            href="{{ userTaskLink($task) }}"
                                            class="btn list-group-item-info list-group-item list-group-item-action"
                                        >
                                            {{ $task->title }}
                                        </a>
                                        @include('tasks.partials._completed_model')
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('extras')
    <div class="row">
        <div class="col">
            <hr class="my-5">
            <div class="h2">
                Add new Task
            </div>
            @include('tasks.partials._form')
        </div>
    </div>
@stop

@section('scripts')
<script>
    $('.completed').on('click', function () {
        this.parentNode.submit();
    });
</script>
@stop
