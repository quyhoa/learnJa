@extends('admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                List products!
            </h1>
			
			<div class="table-responsive">
				<table class="table table-hover">
			        <thead>
			            <tr>
			            	<th width="1%">STT</th>
			                <th width="15%">Name</th>
			                <th width="20%">Intro</th>
			                <th>Image</th>
			                <th width="18%" class="text-center">Actions</th>
			            </tr>
			        </thead>
			        <tbody>
			        	@foreach ($products as $product)
				            <tr>
				                <td>{{ $product->id }}</td>
				                <td>{{ $product->name }}</td>
				                <td>{{ $product->intro }}</td>
				                <td>
				                	{!! Html::image($product->image, $product->slug, ['class'=>'class name','width'=>'200']); !!}
				                </td>
				                <td class="text-center">
				                <a href="{{ Route('product.show',$product->id) }}"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i> View</a>
				                <a href="{{ Route('product.edit',$product->id) }}"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Edit</a>
				                <a href="{{ Route('product.destroy',$product->id) }}" onclick="return confirm('Are you sure you want to delete?')">
				                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i> Delete</a>
				                </td>
				            </tr>
			            @endforeach
			        </tbody>
			    </table>
			</div>
			<br>
			<div> <a href="{{Route('product.create')}}" class="btn btn-default">Creat product!</a></div>
			<div class="text-center">{{$products}}</div>
		</div>
	</div>
@endsection