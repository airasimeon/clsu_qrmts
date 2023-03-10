@extends('adminlte::page')

@section('title', 'About')

@section('content_header')
    <h1>About</h1>
@stop

@section('content')
	@include('includes.messages')
    <div class="row">
			<div class="col-sm-12">
				<div class="box box-danger">
					<div class="box-header with-border">
						<img src="{{asset('/img/branding/im-logo.png')}}" height="30" alt="">
					</div>
					<div class="box-body">
            
            <p> help manage your inventory:</p>
            <ul>
              <li>Product management</li>
              <li>Stock management</li>
              <li>Storage location management</li>
              <li>Supplier management</li>
            </ul>
       
            <ul>
              <li>See which products are stored at what location</li>
              <li>Move products between locations in seconds</li>
              <li>Check stock in and out per location</li>
              <li>View which supplier supplies you what</li>
            </ul>
         
					</div>
          <div class="box-footer">
            <p class="text-muted"></p>
          </div>
				</div>
			</div>
@stop

@section('js')
	<script src="{{asset('js/render_datatables.js')}}" charset="utf-8"></script>
@endsection
