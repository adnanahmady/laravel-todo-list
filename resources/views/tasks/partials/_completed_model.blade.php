{{ Form::model($task, [
    'method' => 'PATCH',
    'url' => "tasks/update/$task->id"
]) }}
{{ csrf_field() }}
<label class="btn btn-outline-secondary m-0 completed-label" for="completed-{{ $task->id }}">
    <span class="check-completed {{ $task->completed ? 'text-success' : 'text-danger' }}">
        <i
            class="fa fa-{{ $task->completed ? 'check' : 'times'}}"
            aria-hidden="true"
        ></i>
    </span>
</label>
{{ Form::checkbox('completed', null, $task->completed, ['class' => 'completed', 'id' => 'completed-' . $task->id]) }}
{{ Form::close() }}
