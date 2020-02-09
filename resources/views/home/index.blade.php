@extends('layouts/master')
@section('content')

<h1>Hello, <i>{{Auth::User()->name}}</i></h1>

<a href="{{URL::to('logout')}}">Logout ({{Auth::User()->name}}) </a>

@stop