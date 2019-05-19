@extends ('layouts.front')
@section('content')
    @include('layouts.partial.error')
    @include('layouts.partial.success')


    <div class="row">

        <div class="well">

            <form class="form-vertical" action="{{route('thread.store')}}" method="post" role="form" id="create-thread-from">
                {{csrf_field()}}
                <div class="forum-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="" placeholder="Input..." value="{{old('subject')}}">
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" id="" placeholder="Input..." value="{{old('type')}}">

                </div>

                <div class="form-group">
                    <label for="thread">Thread</label>
                    <textarea type="text" class="form-control" name="thread" id="" placeholder="Input...">{{old('thread')}}</textarea>>
                </div>


                <button type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>
    </div>




@endsection
