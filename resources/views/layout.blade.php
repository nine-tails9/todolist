<html>
	<head>
		<title>A Todo List</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
	
	@include('layouts.nav')

	@if($flash = session('message'))
	<div class="alert alert-success" id = "flash-message">
		
		{{ $flash }}
	</div>
	@endif
	<div class="container">
		@yield('create')
	</div>
	<div class="container">
	@yield('login')
	</div>

	<div class="container">
	@yield('showTask')
	</div>
	


	</body>

</html>