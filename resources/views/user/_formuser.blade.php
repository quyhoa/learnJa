{!! Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Enter name','onblur'=>'checkUser()'])!!}
<span id='msg' class='alert-danger'></span><br>
{!! Form::text('email',old('email'),['class'=>'form-control','placeholder'=>'Enter email'])!!}<br>
{{ Form::input('password', 'password', old('password'), ['class' => 'form-control','placeholder'=>'Enter password']) }}<br>
{{ Form::input('password', 'confirpassword', old('confirpassword'), ['class' => 'form-control','placeholder'=>'Enter confirpassword']) }}<br>

<div class="form-group">
    <div class="radio">
        <label>
            {{ Form::radio('sex', 'male') }}Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{ Form::radio('sex', 'female',true) }}Female
        </label>
    </div>
</div>

<a href="{{ URL::previous() }}" class="btn btn-default">Go Back</a>
{!! Form::submit($nameAction, array('class' => 'btn btn-default')) !!}