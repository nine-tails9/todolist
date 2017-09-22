@if(count($errors))
		<div class="col col-md-3">
			@foreach($errors->all() as $err)
			<div class="alert alert-danger">
				
					

					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					&nbsp;{{$err}}


			</div>
			@endforeach

		</div>
		@endif