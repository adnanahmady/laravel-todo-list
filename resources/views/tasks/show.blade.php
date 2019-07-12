@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-light">
                <div class="card-header">
                    <div class="card-title mb-1 d-flex justify-content-between">
                        <span class="h3">
                            {{ $task->title }}
                        </span>
                        <span class="h3 text-success">
                            {{ $task->user->name }}
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col">
                            {{ $task->body }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('tasks') }}" class="btn btn-outline-light">
                                <i class="fa fa-arrow-left text-warning mr-2" aria-hidden="true"></i>
                                {{ __('go back') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <span class="text-light">
                                        completed:
                                    </span>
                                    <span class="ml-2 {{ $task->completed ? 'text-success' : 'text-danger' }}">
                                        <i
                                            class="fa fa-{{ $task->completed ? 'check' : 'times'}}"
                                            aria-hidden="true"
                                        ></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="text-success">
                                        created at:
                                    </span>
                                    <span class="text-light">
                                        {{ $task->created_at }}
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="text-success">
                                        updated at:
                                    </span>
                                    <span class="text-light">
                                        {{ $task->updated_at }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
