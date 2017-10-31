<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question',
        'topic_id',
        'user_id',
        'verified' // default set to 0
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function topic()
    {
        return $this->belongsTo('App\Topic');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
