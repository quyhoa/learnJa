@extends('layout')
@section('content')
	<form action = "/user/register" method = "post">
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
  
  	</form>
@endsection