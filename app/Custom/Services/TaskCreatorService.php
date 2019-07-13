<?php

namespace Custom\Services;

use App\Task;
use Custom\Validators\TaskValidator;
use Custom\Exceptions\ValidatorException;

class TaskCreatorService
{
    protected $validator;

    public function __construct(TaskValidator $validator)
    {
        $this->validator = $validator;
    }

    public function make(array $attributes)
    {
        if ($this->validator->isValid($attributes)) {
        Task::create([
            'title' => $attributes['title'],
            'body' => $attributes['body'],
            'user_id' => $attributes['assign'],
            'completed' => false
        ]);

        return true;
        }

        throw new ValidatorException('Task Validation failed', $this->validator->getErrors());
    }
}
