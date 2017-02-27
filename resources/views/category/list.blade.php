@extends('admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                List category!
            </h1>
			
			<div class="table-responsive">
				<table class="table table-hover">
			        <thead>
			            <tr>
			            	<th width="5%">STT</th>
			                <th width="15%">Name</th>
			                <th class="text-center">Actions</th>
			            </tr>
			        </thead>
			        <tbody>
			        	@foreach ($categorys as $category)
				            <tr>
				                <td>{{ $category->id }}</td>
				                <td>{{ $category->name }}</td>
				                <td class="text-center">
				                <a href="{{ Route('category.show',$category->id) }}"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i> View</a>
				                <a href="{{ Route('category.edit',$category->id) }}"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Edit</a>
				                <a href="/adm/category/delete/{{ $category->id }}" onclick="return confirm('Are you sure you want to delete?')">
				                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i> Delete</a>
				                </td>
				            </tr>
			            @endforeach
			        </tbody>
			    </table>
			</div>
			<br>
			<div> <a href="{{Route('category.create')}}" class="btn btn-default">Creat category!</a></div>
			<div class="text-center">{{$categorys}}</div>
		</div>
	</div>
@endsection