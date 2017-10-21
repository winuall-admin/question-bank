<?php

namespace App;

use App\Topic;
use Illuminate\Database\Eloquent\Model;

class SubTopic extends Model
{
    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }
}
