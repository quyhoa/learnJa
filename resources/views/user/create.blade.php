@extends('admin');
@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Create new user!
            </h1>
			<div class="row">
                <div class="col-lg-6">    
                	@if (count($errors) > 0)
			         	<div class = "alert alert-danger">
			            	<ul>
			               		@foreach ($errors->all() as $error)
			                  		<li>. {{ $error }}</li>
			               		@endforeach
			            	</ul>
			         	</div>
			      	@endif            	
	                {!! Form::open(['url'=>'adm/user/register','method'=>'POST']) !!}
		            	@include('user._formuser', array('nameAction' => 'Register user!'))           	
		            {!! Form::close()!!}
                </div>
            </div>            
        </div>
    </div>
	<!-- /.row -->
@endsection