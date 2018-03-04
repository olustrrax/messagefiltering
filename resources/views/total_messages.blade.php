@extends('layout.master')

@section('content')
<div class="container">
	<table class="table table-bordered table-inverse">
		  <thead>
		    <tr>
		      <th>#</th>
					<th>Prediction</th>
		      <th>Username</th>
		      <th>Text</th>
					<th>Time</th>
		    </tr>
		  </thead>
		  <tbody>
				@foreach($data as $d)
					@if($d->prediction == "negative")
					<tr class="danger">
					@elseif($d->prediction == "positive")
					<tr class="success">	
					@endif
						<td>{{$d->message_id}}</td>
						<td><b>
								@if($d->prediction == "negative")
									<span style="color:darkred">{{$d->prediction}}</span>
								@elseif($d->prediction == "positive")
									<span style="color:seagreen">{{$d->prediction}}</span>
								@else						
									<span>problem with classify</span>
								@endif
							</b>
						</td>
						<td>{{$d->screen_name}}</td>
						<td>{{$d->text}}</td>
						<td>{{$d->time_tweet}}</td>
						
					</tr>
		  	@endforeach   
		  </tbody>
	</table>  

	<div class="panel-heading" style="display:flex; justify-content:center;align-items:center;">
		{{ $data->links() }}
	</div>
</div>

<style>
	.container {
		padding-left: 70px;
		padding-right: 70px;
		margin-right: auto;
		margin-left: auto;
	}
</style>

@endsection