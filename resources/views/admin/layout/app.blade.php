<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css')}}">
	<script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
	@yield('content')
</body>
</html>