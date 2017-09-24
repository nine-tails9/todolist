@extends ('layout')


@section ('showTask')		
	@foreach($task as $t)
	<div class="jumbotron">
	  <h2>{{$t->title}}</h2>
	  <small>{{ $t->user->email}}</small>
	  <p>{{ $t->task }}</p>
	</div>

	  
	 @endforeach


	
	<hr>
	<div class="panel panel-primary">
	  <!-- Default panel contents -->
	  <div class="panel-heading"><h4>Comments</h4></div>
	   <table class="table">
	  @foreach($task as $t)
	  	
	  	@foreach($t->com as $comm)

	  		<tr><td>{{ $comm->body }}  </td><td> <small>{{ $comm->created_at->diffForHumans()}} </small>  </td><td>By: {{ $comm->user->email}}</td></tr>


	  
	  	@endforeach

	  @endforeach



	  <!-- Table -->
	 
	
	  </table>
	</div>
	<div class="container">

	 <form action= "/task/addComment/{{$t->id}}" method="post">
	 {{csrf_field()}}
	
	 <div class="form-group"><textarea name="comment" id="comment" cols="90" rows="5" placeholder="Type In Your Comment"></textarea>
	 </div>
	

	<div class="form-group">
	 <br><input type="submit" class="btn btn-info" value="Add Comment" > 

	</div>
	 </form>

	 @include('err')
	
	 </div>
	 




@endsection