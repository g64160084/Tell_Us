<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tell_US</title>
    <link href="https://bootswatch.com/3/paper/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>

@include('layouts.partial.navbar')
@yield('banner')

<div class="container">

    <div class="row">
        <div class="row content-heading">
            <div class="col-md-3"><h4>Category</h4></div>
            <div class="cpl-md-9">
                <div class="col-md-4"><h4 class="main-content-heading">@yield('heading')</h4>
                </div>
                <div class="col-md-offset-6 col-md-2">
                    <a class="btn btn-primary" href="{{route('thread.create')}}">Create Thread</a>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        {{--//category section--}}
        <div class="col-md-3">
            <ul class="list-group">
                <a href="{{route('thread.index')}}" class="list-group-item">
                    <span class="badge">14</span>
                    All Thread
                </a>
                <a href="#" class="list-group-item">
                    <span class="badge">2</span>
                    Transportasi
                </a>
                <a href="#" class="list-group-item">
                    <span class="badge">1</span>
                    Fasilitas
                </a>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="content-wrap well">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
</body>
</html>

