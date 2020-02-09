@extends('layouts/master')
@section('content')

{{ Form::open(array('url' => 'login')) }}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p style="background-color:  #d4300c; color: #fff;">    
    {{ $errors->first('email') }}
</p>

<p style="background-color:  #d4300c; color: #fff;">    
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Login') }}</p>
{{ Form::close() }}

@stop