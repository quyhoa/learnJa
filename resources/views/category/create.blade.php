@extends('admin');
@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Create new category!
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
	                {!! Form::open(['url'=>'adm/category/store','method'=>'POST']) !!}
		            	{!! Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Enter name'])!!}<br>
		            	<a href="{{ URL::previous() }}" class="btn btn-default">Go Back</a>
		            	{!! Form::submit('Register category!', array('class' => 'btn btn-default')) !!}		            	
		            {!! Form::close()!!}
                </div>
            </div>            
        </div>
    </div>
	<!-- /.row -->
@endsection