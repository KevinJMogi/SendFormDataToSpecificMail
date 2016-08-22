@extends('layouts.Layout')

@section('head')
	<title>Mail</title>
@stop

@section('body')
	Name  : {{$name}}
	<br/>
	Email : {{$email}}
	<br/>	
	Phone : {{$phone}}
	<br/>
	Occupation : {{$occupation}}
@stop


