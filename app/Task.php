<?php
/**
 * @author adnan ahmady <adnan.ahmady1394@gmail.com>
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
