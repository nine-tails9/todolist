@extends('layout')


@section('create')	

	@foreach($tasks as $t)
	<div class="panel panel-info">
	  
	  <div class="panel-heading">
	  
	   <a href="task/{{ $t->id }}"> {{ $t->title }} </a>
	    
	  
	  </div>
	  
	  <div class="panel-body"> {{ $t->task }}</div>

	  <div class="panel-footer">By : {{ $t->user->email}}</div>

	
	</div>
	
	@endforeach
	
@endsection