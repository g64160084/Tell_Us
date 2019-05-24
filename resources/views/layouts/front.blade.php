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

    @include('layouts.partial.error')
    @include('layouts.partial.success')
    <div class="row">
        {{--//category section--}}
        @section('category')
            @include('layouts.partial.categories')
        @show

        <div class="col-md-9">
            <div class="row content-heading">
                <h4>@yield('heading')</h4>
            </div>
            <div class="content-wrap">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@yield('js')
</body>
</html>



