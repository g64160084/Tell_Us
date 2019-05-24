@extends ('layouts.front')
@section('content')
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
                    <select class="custom-select mr-sm-2 form-control" id="" name="type">
                        <option value="1">Transportasi</option>
                        <option value="2">Fasilitas</option>
                        <option value="3">Kebersihan</option>
                        <option value="4">Lain-Lain</option>
                    </select>

                </div>

                <div class="form-group">
                    <label for="thread">Thread</label>
                    <textarea type="text" class="form-control" name="thread" id="" placeholder="Input...">{{old('thread')}}</textarea>>
                </div>
                <!-- captcha no suport di local
                <div class="form-group">
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                </div>
                -->


                <button type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>
    </div>




@endsection
