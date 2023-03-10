@extends('Layouts.app')

@section('content')
<h1>Home</h1>

<p>{{$datas[0]}}</p>

<p>{{$datas[1]['fname'].' '.$datas[1]['lname']}}</p>
@endsection