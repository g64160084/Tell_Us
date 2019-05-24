@extends('layouts.front')


@section('content')
<div class="content-warp well">
    <h4>{{$thread->subject}}</h4>
    <hr>
    <div class="thread-details">
        {!! \Michelf\Markdown::defaultTransform($thread->thread) !!}
    </div>
    <br>

    @if(auth()->user()->id == $thread->user_id)
    <div class="actions">
        {{--//edit--}}
        <a href="{{route('thread.edit',$thread->id)}}" class="btn btn-info btn-xs">Edit</a>
        {{--//delete form--}}

        <form action="{{route('thread.destroy',$thread->id)}}" method="POST" class="inline-it">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type="submit" value="Delete" class="btn btn-xs btn-danger">

        </form>



    </div>
    @endif
</div>
<hr><br>


    {{--Answers/comment--}}
    @foreach($thread->comments as $comment)
        <div class="comment-list well well-lg">

            <h4>{{$comment-> body }}</h4>
            <lead>{{$comment->user->name}}</lead>

            @if(auth()->user()->id == $comment->user_id)
            <div class="actions">
                {{--//edit comment--}}
                {{--<a href="{{route('thread.edit',$thread->id)}}" class="btn btn-info btn-xs">Edit</a>--}}

                <a class="btn btn-primary btn-xs" data-toggle="modal" href="#{{$comment->id}}">edit</a>
                <div class="modal fade" id="{{$comment->id}}">
                	<div class="modal-dialog">
                		<div class="modal-content">
                			<div class="modal-header">
                				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                				<h4 class="modal-title">Modal title</h4>
                			</div>
                			<div class="modal-body">
                                <div class="comment-form">
                                    <form action="{{route('comment.update',$comment->id)}}" method="POST" role="form">
                                        {{csrf_field()}}
                                        {{method_field('put')}}
                                        <legend>Edit Comment</legend>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="body" id="" placeholder="Input..." value="{{$comment->body}}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Comment</button>
                                    </form>

                                </div>
                			</div>
                		</div><!-- /.modal-content -->
                	</div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                {{--//delete comment--}}
                <form action="{{route('comment.destroy',$comment->id)}}" method="POST" class="inline-it">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="submit" value="Delete" class="btn btn-xs btn-danger">

                </form>
            </div>
            @endif

        </div>
        <hr>
        {{--Reply form--}}
        <button class="btn btn-xs btn-default" onclick="toogleReply({{$comment->id }})">Reply</button>
        <div class="reply-form-{{$comment->id}} hide">
            <form action="{{route('replycomment.store',$comment->id)}}" method="POST" role="form">
                {{csrf_field()}}
                <legend>Create Reply</legend>

                <div class="form-group">
                    <input type="text" class="form-control" name="body" id="" placeholder="Reply...">
                </div>
                <button type="submit" class="btn btn-primary">Reply</button>
            </form>

        </div>
        <br>

        {{--Reply to comment--}}
        @foreach($comment->comments as $reply)
            <div class="small well text-info reply-list" style="margin-left: 40px">
                <p>{{$reply->body}}</p>
                <lead>{{$reply->user->name}}</lead>

                <div class="actions">
                    {{--//edit comment--}}
                    {{--<a href="{{route('thread.edit',$thread->id)}}" class="btn btn-info btn-xs">Edit</a>--}}

                    <a class="btn btn-primary btn-xs" data-toggle="modal" href="#{{$reply->id}}">edit</a>
                    <div class="modal fade" id="{{$reply->id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="comment-form">
                                        <form action="{{route('comment.update',$reply->id)}}" method="POST" role="form">
                                            {{csrf_field()}}
                                            {{method_field('put')}}
                                            <legend>Edit Comment</legend>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="body" id="" placeholder="Input..." value="{{$reply->body}}">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Reply</button>
                                        </form>

                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    {{--//delete comment--}}
                    <form action="{{route('comment.destroy',$reply->id)}}" method="POST" class="inline-it">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input type="submit" value="Delete" class="btn btn-xs btn-danger">

                    </form>



                </div>

            </div>
        @endforeach

    @endforeach

    <br>
    <br>
    <div class="comment-form">
        <form action="{{route('threadcomment.store',$thread->id)}}" method="POST" role="form">
        	{{csrf_field()}}
            <legend>Create Comment</legend>
        
        	<div class="form-group">
        		<input type="text" class="form-control" name="body" id="" placeholder="Input...">
        	</div>
        	<button type="submit" class="btn btn-primary">Comment</button>
        </form>
        
    </div>

@endsection


@section('js')
    <script>
        function toogleReply(commentId) {
            $('.reply-form-'+commentId).toggleClass('hide');
        }

    </script>
    @endsection
