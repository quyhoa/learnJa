@extends('admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Update user!
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
                	{{ Form::model($user, array('url' => 'adm/user/update/' . $user->id, 'method' => 'PUT')) }}
		            	@include('user._formuser', array('nameAction' => 'Update user!'))		            	
		            {!! Form::close()!!}
                </div>                
            </div>            
        </div>
    </div>
@endsection