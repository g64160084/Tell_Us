<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

}
