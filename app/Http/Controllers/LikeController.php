<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Thread;

class LikeController extends Controller
{
    public function toggleLike()
    {
        $threadId=Input::get('threadId');
        $thread=Thread::find($threadId);

        //$usersLike=$thread->likes()->where('user_id',auth()->id())->where('likeable_id',$threadId)->first();

        if(!$thread->isLiked())
        {
            $thread->likeIt();
            return response()->json(['status'=>'success','message'=>'liked']);
        }
        else
        {
            $thread->unlikeIt();
            return response()->json(['status'=>'success','message'=>'unliked']);
        }

    }
}
