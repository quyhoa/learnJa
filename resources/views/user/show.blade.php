@extends('admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Detail user!
            </h1>
			<div class="row">
                <div class="col-lg-6">    
                	<table>
                		<tr>
                			<td style="width:90px">Name</td>
                			<td>{{$user->name}}</td>
                		</tr>
                		<tr>
                			<td style="width:150px">Email</td>
                			<td>{{$user->email}}</td>
                		</tr>
                		<tr>
                			<td style="width:150px">Date create</td>
                			<td>{{$user->created_at}}</td>
                		</tr>
                		<tr>                            
                			<td conspan='2'><br><a href="{{ URL::previous() }}" class="btn btn-default">Go Back</a></td>
                		</tr>
                	</table>
                </div>                
            </div>            
        </div>
    </div>
@endsection