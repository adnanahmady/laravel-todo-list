{{ Form::open(['url' => 'tasks', 'rule' => 'form']) }}
<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
    {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}
</div>

<div class="form-group">
    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => '5']) }}
    {!! $errors->first('body', '<span class="text-danger">:message</span>') !!}
</div>

@isset($users)
    <div class="form-group">
        {{ Form::label('assign', 'Assign To') }}
        {{ Form::select('assign', $users, null, ['class' => 'form-control']) }}
    </div>
@endisset

<div class="form-group">
    {{ Form::submit('Add New Task', ['class' => 'btn btn-primary']) }}
</div>
{{ Form::close() }}
