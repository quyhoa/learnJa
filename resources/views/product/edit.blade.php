@extends('admin')
@section('content')
	<?php $category = [] ?>
    @foreach($categorys as $vl)
    	<?php $category[$vl['id']] = $vl['name']; ?>
    @endforeach
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Update product!
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
	                	{{ Form::model($product, array('url' => 'adm/product/' . $product->id, 'method' => 'PUT','files'=>true)) }}
		            	{!! Form::select('category_id', $category, $product->category_id, array('class' => 'form-control'));!!}<br>
		            	{!! Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Enter name'])!!}<br>
		            	{!! Form::textarea('intro', old('intro'), array('class' => 'form-control','rows'=>5,'cols'=>20,'placeholder'=>'Enter intro')) !!}<br>
		            	{!! Form::textarea('content', old('content'), array('class' => 'form-control','rows'=>8,'cols'=>20,'placeholder'=>'Enter content')) !!}<br>
		            	{!! Form::file('image',array('class' => 'name')) !!}<br>
		            	{!! Html::image($product->image, $product->slug, ['class'=>'img-responsive','width'=>'200']); !!}<br>
		            	<!-- {!! Form::file('images[]', array('multiple'=>true)) !!}<br> -->
		            	{!! Form::text('price',old('price'),['class'=>'form-control','placeholder'=>'Enter price'])!!}<br>
		            	
		            	<div class="form-group">
                            <div class="radio">
                                <label>
                                    {{ Form::radio('sex', 'male') }}Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    {{ Form::radio('sex', 'female',true) }}Female
                                </label>
                            </div>
                        </div>
						
						<a href="{{ URL::previous() }}" class="btn btn-default">Go Back</a>
		            	{!! Form::submit('Update product!', array('class' => 'btn btn-default')) !!}		            	
		            {!! Form::close()!!}
                </div>                
            </div>            
        </div>
    </div>
@endsection