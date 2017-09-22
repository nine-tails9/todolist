<html>
	<head>
		<title>A Todo List</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
	
	@include('layouts.nav')

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