<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class BaseModel extends Model {
    protected $errors;

    public static function boot() {
        parent::boot();

        static::saving(function ($model) {
            return $model->validate();
        });
    }

    public function getErrors() {
        return $this->errors;
    }

    public function validate() {
        $validation = Validator::make($this->getAttributes(), static::$rules);

        if ($validation->fails()) {
            $this->errors = $validation->errors();

            return false;
        }

        return true;
    }
}
