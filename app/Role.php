<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const OPERATOR = 'Operator';
    const QUESTION_REVIEWER = 'Question Reviewer';
    const ADMIN = 'Admin';

    protected $fillable = [
        'role'
    ];

    public function user() {
        return $this->hasMany('App\User');
    }
}
