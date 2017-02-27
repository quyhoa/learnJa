@extends('admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Category: {{$details->name}}
            </h1>
            @foreach($details->product as $detail)
                <div class="row">
                    <div class="col-lg-4">
                        {!! Html::image($detail->image, $detail->slug, ['class'=>'img-responsive','width'=>'250','height'=>'250']); !!}
                    </div>            
                    <div class="col-lg-8">
                        {{$detail->intro}}
                    </div> 
                </div> 
                <br>
            @endforeach          
        </div>
    </div>
@endsection