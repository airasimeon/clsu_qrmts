@extends('Layouts.app')
@section('content')
<div class="container m-5 p-5">
<h1>Subjects</h1>
	<a href="/user/subjects/add" class="btn btn-primary"><span>Add Subjects</span></a>
	<table class="table table-striped table-bordered mt-3">
		<thead class="thead-dark bg-secondary">
			<th>Subject</th>
			<th>Room</th>
			<th>Action</th>
		</thead>
		<tbody>
			@foreach($subjects as $subject)
				<tr>
				<td>{{$subject->sub_title}}</td>
				<td>{{$subject->sub_room}}</td>
				<td>
					<div class="m-1">
					<button>
						<a href="/user/subjects/{{$subject->id}}/edit" class="btn btn-warning btn-icon-split">
							<span class="icon"><i class="bi bi-arrow-up-square"></i></span>
							<span class="">Update</span>
						</a>
					</button>
					</div>
					<div class="m-1">
					{!!Form::open(['action'=> ['App\Http\Controllers\SubjectController@destroy', $subject->id],'method'=>'DELETE','class'=>''])!!}
					<button type="submit"  class="btn btn-danger btn-icon-split">
						<span class="icon"><i class="bi bi-trash"></i></span>
						<span class="">Delete</span>
					</button>
					{!!Form::close()!!}
				</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection