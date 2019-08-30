<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
		<link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
		<meta name="description" content="">

		@if(isset($page_title))
		<title>{{ config('app.name') }} - {{ $page_title }}</title>
		@else
		<title>{{ config('app.name') }}</title>
		@endif
		<link rel="stylesheet" href="{{ URL::asset('web/assets/mobirise-icons/mobirise-icons.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('tether/tether.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap-grid.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap-reboot.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('socicon/css/styles.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('dropdown/css/style.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('theme/css/style.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('mobirise/css/mbr-additional.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ URL::asset('css/layouts.css') }}">
	</head>
	<body>
		@include('layouts.navbar')
		@yield('content')
		@include('layouts.footer')
		@include('layouts.js')
	</body>
</html>