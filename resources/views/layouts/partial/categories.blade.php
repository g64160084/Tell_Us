<div class="col-md-3">
    <h4>Category</h4>
    <ul class="list-group">
        <a href="{{route('thread.index')}}" class="list-group-item">
            <span class="badge">{{$threads = DB::table('threads')->count()}}</span>
            All Thread
        </a>
        <a href="#" class="list-group-item">
            <span class="badge">{{$threads = DB::table('threads')->where('type',1)->get()->count()}}</span>
            Transportasi
        </a>
        <a href="#" class="list-group-item">
            <span class="badge">{{$threads = DB::table('threads')->where('type',2)->get()->count()}}</span>
            Fasilitas
        </a>
        <a href="#" class="list-group-item">
            <span class="badge">{{$threads = DB::table('threads')->where('type',3)->get()->count()}}</span>
            Kebersihan
        </a>
        <a href="#" class="list-group-item">
            <span class="badge">{{$threads = DB::table('threads')->where('type',4)->get()->count()}}</span>
            Lain-Lain
        </a>
    </ul>
</div>
