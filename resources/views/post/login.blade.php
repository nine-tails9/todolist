@extends ('layout')

@section('login')

<div class="row">
	<h2>Login</h2>
		<div class="col col-md-6">
		
		<form action="login" method="post" action="">
		
		{{csrf_field()}}
		
		  <div class="form-group">
		


		    <label for="email">Email</label>
		
		    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" >
		    
		   
		  </div>
		  
		  <div class="form-group">
		  
		    <label for="Task">Password</label>
		  
		    <input type="password" class="form-control" id="Password" name="Password" placeholder="password" >
		  
		  </div>
		  
		<div class="row">
		 
		  <div class="col col-md-4"><button type="submit" class="btn btn-info">Login!</button></div>
		 

		  <div class="col col-md-4 is-right" ><button class="btn btn-default"><a href="register">Signup!</a></button>
		  </div>
		
		</div>
		
		</form>
		
		@include('err')
		
		</div>
</div>
@endsection