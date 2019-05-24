<?php


namespace App;


trait LikeableTrait
{
    public function likes()
    {
        return $this->morphMany(Like::class,'likeable');
    }

    public function likeit()
    {
        $like=new Like();
        $like->user_id=auth()->user()->id;

        $this->likes()->save($like);

        return $like;
    }

    public function unlikeIt()
    {
//        $like=Like::find($id)$like->delete();
        $this->likes()->where('user_id',auth()->id())->delete();
    }

    public function isliked()
    {
        return !!$this->likes()->where('user_id',auth()->id())->count();
    }


}
