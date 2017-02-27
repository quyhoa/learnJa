@extends('layout')
@section('content')
	<div class="contentsun1">
		@if (count($errors) > 0)
         	<div class = "alert alert-danger">
            	<ul>
               		@foreach ($errors->all() as $error)
                  		<li>. {{ $error }}</li>
               		@endforeach
            	</ul>
         	</div>
      	@endif
		{!! Form::open(array('url' => '/user/register', 'method' => 'POST')) !!}
			<table>
				<tr>
					<td>Name</td>
					<td>{!! Form::text('name',''); !!}</td>
				</tr>

				<tr>
					<td>Username</td>
					<td>{!! Form::text('username',''); !!}</td>
				</tr>

				<tr>
					<td>Passwork</td>
					<td>{!! Form::password('password',''); !!}</td>
				</tr>

				<tr>
		           <td colspan = "2" align = "center">
		              {!! Form::submit('Register!'); !!}
		           </td>
		        </tr>
			</table>
		{!! Form::close() !!}
		<!-- <form action = "/user/register" method = "post">
	     	<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
	  
	     	<table>
		        <tr>
		           <td>Name</td>
		           <td><input type = "text" name = "name" /></td>
		        </tr>
		     
		        <tr>
		           <td>Username</td>
		           <td><input type = "text" name = "username" /></td>
		        </tr>
		     
		        <tr>
		           <td>Password</td>
		           <td><input type = "password" name = "password" /></td>
		        </tr>
		     
		        <tr>
		           <td colspan = "2" align = "center">
		              <input type = "submit" value = "Register" />
		           </td>
		        </tr>
		    </table>
	  
	  	</form> -->
	</div>
@endsection