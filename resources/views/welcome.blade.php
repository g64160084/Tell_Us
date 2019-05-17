@extends ('layouts.front')

@section('banner')
    <div class="jumbotorn">
        <div class="container">
            <h1>Tell_us</h1>
            <p>Laporkan Masalah Disekitar Kampus</p>
            <p>
                <a class="btn btn-primary btn-lg"> Learn More</a>
            </p>

        </div>

    </div>
@endsection
@section('heading','Threads')
@section('content')
    @include('thread.partial.thread-list')
@endsection
