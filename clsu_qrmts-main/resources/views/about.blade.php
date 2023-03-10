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
						<img src="{{asset('/img/branding/clsu-logo.png')}}" height="70" alt=""> 
       <h1>QR-SMTS CLSU’S PROPERTY AND SUPPLY OFFICE </h1>
        
					</div>
					<div class="box-body">
            
          
            <ul>
              <li>The Property and Supply Office of Central Luzon State University is in charge of capturing and monitoring both incoming and outgoing supplies throughout the university. The proposed project has two components, the data capturing through QR code and the application that handles the data. Despite having modern tools such as computers, printers, and smartphones, the CLSU Property and Supplies Office relies on transferring data manually to spreadsheet and paper reports. The main objective of the proposed project is to employ a system that can track and record supplies through the use of QR code. By automating the repetitive tasks of manual processes in the operations of the office, the proponents can help to improve efficiency, minimize unreliable results, and increase staff efficiency and productivity. The proponents will be adding useful features that can improve the work efficiency. One of the features of the system is to enable the requisitioning offices/departments to see the supplies availability. </li>
             
            </ul>


           <p>The developers projects aims to:</p>
            <ul>
              <li>Utilize QR-code tagging and scanning for the supplies to eliminate unreliable results and for faster check in/out transactions.</li>
              <li>Record the delivered and issued supplies including returns.</li>
              <li>Provide a search function for easy retrieval of the list of supplies.</li>
              <li>Generate reports that use standard forms set by Government Accounting Manual (GAM).</li>
              <li>Provide a feature for the requisitioning offices/departments to view the available supplies.</li>
              <li>Implement a stock alert feature that will notify them if the inventory levels fall below the threshold they’ve set.</li>

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