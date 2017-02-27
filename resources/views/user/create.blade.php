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
		            	{!! Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Enter name'])!!}<br>
		            	{!! Form::text('email',old('email'),['class'=>'form-control','placeholder'=>'Enter email'])!!}<br>
		            	{{ Form::input('password', 'password', old('password'), ['class' => 'form-control','placeholder'=>'Enter password']) }}<br>
		            	{{ Form::input('password', 'confirpassword', old('confirpassword'), ['class' => 'form-control','placeholder'=>'Enter confirpassword']) }}<br>
		            	
		            	<div class="form-group">
                            <!-- <div class="checkbox">
                            	                            {{ Form::radio('sex', 'male') }}<br>
                            								{{ Form::radio('sex', 'female', old('name')) }}
                            								Form::radio('name', 'value', old('name'), array('class' => 'name'));
                            							</div> -->

							<div class="radio">
                                <label>
                                    {{ Form::radio('sex', 'male') }}Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    {{ Form::radio('sex', 'female',true) }}Female
                                </label>
                            </div>
                        </div>
						
						<a href="{{ URL::previous() }}" class="btn btn-default">Go Back</a>
		            	{!! Form::submit('Register user!', array('class' => 'btn btn-default')) !!}		            	
		            {!! Form::close()!!}
                </div>
            </div>            
        </div>
    </div>
	<!-- /.row -->
@endsection