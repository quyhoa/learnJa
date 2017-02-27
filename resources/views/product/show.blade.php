@extends('admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Category: {{$details->name}}
            </h1>
            @foreach($details->product as $detail)
            <div class="col-lg-4">
                {{$detail->intro}}
            </div>            
            <div class="col-lg-8">
                {{$detail->content}}
            </div>  
            @endforeach          
        </div>
    </div>
@endsection