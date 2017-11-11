@extends('layout.master')

@section('content')



<div class="container">
	<table class="table table-bordered table-inverse">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>ID</th>
		      <th>Username</th>
		      <th>Text</th>
		      <th>Time</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach($data as $data)
		    <tr>
		      <th scope="row">{{$data->message_id}}</th>
		      <td>{{$data->id}}</td>
		      <td>{{$data->username}}</td>
		      <td>{{$data->text}}</td>
		      <td>{{$data->time}}</td>
		    </tr>
		  	@endforeach   
		  </tbody>

		

	</table>  
</div>

@endsection