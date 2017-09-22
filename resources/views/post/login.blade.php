@extends ('layout')

@section('login')

<div class="row">
	
		<div class="col col-md-6">
		<form action="create" method="post">
		{{csrf_field()}}
		  <div class="form-group">
		
		    <label for="Username">Username</label>
		
		    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" >
		    
		   
		  </div>
		  
		  <div class="form-group">
		  
		    <label for="Task">Password</label>
		  
		    <input type="password" class="form-control" id="password" name="password" placeholder="password" >
		  
		  </div>
		  
		<div class="row">
		  <div class="col col-md-4"><button type="submit" class="btn btn-info">Login!</button></div>
		  <div class="col col-md-4 is-right" ><button type="submit" class="btn btn-info">Signup!</button></div>
		</div>
		</form>
		</div>
</div>
@endsection