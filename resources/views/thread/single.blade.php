@extends('layouts.front')


@section('content')

    <h4>{{$thread->subject}}</h4>
    <hr>
    <div class="thread-details">
        {{$thread->thread}}
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

@endsection
