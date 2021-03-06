<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body>

    @include('flash::message')
    @include('partials.nav')
	@yield('content')

	<!-- Scripts -->
   <script  type="text/javascript" src="{{ url('/js/jquery-1.10.2.min.js') }}"></script>
</body>
</html>
