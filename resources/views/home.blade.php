@extends('layout.master')

@section('content')

<div class="container">
	<table class="table table-bordered table-inverse">
		  <thead>
		    <tr>
		      <th>#</th>
		      {{--  <th>ID</th>  --}}
		      <th>Username</th>
		      <th>Text</th>
					<th>Time</th>
					<th>Prediction</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach($data as $data)
		    <tr>
		      <td>{{$data->message_id}}</td>
		      {{--  <td>{{$data->id}}</td>  --}}
		      <td>{{$data->username}}</td>
		      <td>{{$data->text}}</td>
					<td>{{$data->time_tweet}}</td>
					<td></td>
		    </tr>
		  	@endforeach   
		  </tbody>

		

	</table>  
</div>

@endsection