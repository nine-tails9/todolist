@extends ('layout')


@section('create')
<h2>Register</h2>

	<div class="row">
	
		<div class="col col-md-6">
		<form action="signup" method="post">
		{{csrf_field()}}
		  <div class="form-group">
		
		    <label for="Email">Email</label>
		
		    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" >
		    
		   	
		   
		  </div>
		  
		  <div class="form-group">
		  
		    <label for="Password">Password</label>
		  
		    <input type="Password" class="form-control" id="Password" name="Password" placeholder="Password" >
		  
		  </div>
	
		  
		
		  <button type="submit" class="btn btn-primary">Register</button>
		
		</form>
		</div>
		@include('err')
	</div>
	


@endsection