@extends ('layout')


@section('create')
<h2>Add A task</h2>

	<div class="row">
	
		<div class="col col-md-6">
		<form action="create" method="post">
		{{csrf_field()}}
		  <div class="form-group">
		
		    <label for="Title">Title</label>
		
		    <input type="text" class="form-control" id="Title" name="Title" placeholder="Enter Title" >
		    
		   
		  </div>
		  
		  <div class="form-group">
		  
		    <label for="Task">Task</label>
		  
		    <input type="Text" class="form-control" id="Task" name="Task" placeholder="Task" >
		  
		  </div>
		  
		
		  <button type="submit" class="btn btn-primary">Add Task</button>
		
		</form>
		</div>
		@include('err')
	</div>

	<div class="row">
	<div class="col col-md-8">
	@foreach($tasks as $t)
	<div class="panel panel-info">
	  
	  <div class="panel-heading">
	  
	   <a href="task/{{ $t->id }}"> {{ $t->title }} </a>
	    
	  
	  </div>
	  
	  <div class="panel-body"> {{ $t->task }}</div>
	
	</div>
	
	@endforeach

	</div>
	</div>


@endsection