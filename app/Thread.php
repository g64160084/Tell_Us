<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use commentableTrait,LikeableTrait;
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
