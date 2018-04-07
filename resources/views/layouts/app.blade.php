<html>
<head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/custom.scss') }}" />
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show
@include('layouts.header')
<div class="container">
    @yield('content')
    @include('layouts.footer')
</div>
</body>
</html>
