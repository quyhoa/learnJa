@extends('admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                List Users!
            </h1>
			
			<div class="table-responsive">
			    <table class="table table-hover">
			        <thead>
			            <tr>
			            	<th width="1%">STT</th>
			                <th width="15%">Name</th>
			                <th width="20%">Email</th>
			                <th width="15%" class="text-center">Actions</th>
			            </tr>
			        </thead>
			        <tbody>
			        	@foreach ($users as $user)
				            <tr>
				                <td>{{ $user->id }}</td>
				                <td>{{ $user->name }}</td>
				                <td>{{ $user->email }}</td>
				                <td class="text-center">
				                <a href="/adm/show/{{ $user->id }}"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i> View</a>
				                <a href="/adm/{{ $user->id }}/edit"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Edit</a>
				                <a href="/adm/user/delete/{{ $user->id }}" onclick="return confirm('Are you sure you want to delete?')">
				                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i> Delete</a>
				                </td>
				            </tr>
			            @endforeach
			        </tbody>
			    </table>
			</div>
			<br>
			<div> 
				<a href="/adm/create" class="btn btn-default">Creat user!</a>
			</div>			
			<div class="text-center">{{$users}}</div>
		</div>
	</div>
@endsection