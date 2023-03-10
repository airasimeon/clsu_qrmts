@extends('Layouts.app')
@section('content')
<div class="container m-5">
	<div class="row m-5">
		<div class="col-6 m-auto bg-white p-5 rounded shadow-lg">
			<h3 class="text-center">Update Subject</h3>
			{!!Form::open([
				'action'=>['App\Http\Controllers\SubjectController@update',$subjects->id],
				'method'=>'put',
				'class'=>'form'])!!}
				<div class="form-group">
					{{Form::label('name','Title')}}
					{{Form::text('sub_title',$subjects->sub_title,['class'=>'form-control','placeholder'=>'Subject Title'])}}
				</div>
				<div class="form-group">
					{{Form::label('name','Room')}}
					{{Form::text('sub_room',$subjects->sub_room,['class'=>'form-control','placeholder'=>'Room'])}}
				</div>
				<div class="form-group">
					{{Form::submit('Update Subject',['class'=>'my-2 form-control btn-primary'])}}
				</div>
			{!!Form::close()!!}
				</div>
			</div>
		</div>
@endsection
