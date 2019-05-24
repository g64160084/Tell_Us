<div class="list-group">
    @forelse($threads as $thread)
        <a href="{{route('thread.show',$thread->id)}}" class="list-group-item">
            <h4 class="list-group-item-heading">{{$thread->subject}}
                @if($thread->status == 1)
                <p class="label label-warning pull-right"> On Progress</p>
                    @endif
                @if($thread->status == 2)
                    <p class="label label-success pull-right"> Selesai </p>
                @endif
            </h4>
            <p class="list-group-item-text">{{str_limit($thread->thread,100)}}</p>
            <button id="likeIt" class="btn btn-default btn-xs">{{$thread->likes()->count()}}</button>
            <button id="likeIt" class="btn btn-default btn-xs {{$thread->isLiked()?"liked":""}}" onclick="likeIt('{{$thread->id}}',this)"><span class="glyphicon glyphicon-thumbs-up"></span></button>
        </a>

    @empty
        <h5>No Threads</h5>

    @endforelse
</div>

@section('js')
    <script>
        function toogleReply(commentId) {
            var csrftoken='{{csrf_token()}}';
            $('.reply-form-'+commentId).toggleClass('hide');
        }

        function likeIt(threadId,elem) {
            var csrftoken='{{csrf_token()}}';
            $.post('{{route('toggleLike')}}',{threadId:threadId,_token:csrftoken},function (data) {
                console.log(data);
                if(data.message==='liked'){
                    //$(elem).css({color:'red'});
                    $(elem).addClass('liked');
                }else
                {
                    $(elem).removeClass('liked');
                }

            });
        }

    </script>
@endsection
