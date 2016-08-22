@extends('layouts.Layout')

@section('head')
	<title>Thank You</title>

	{!! Html::style('css/thankYou.css') !!}
	{!! Html::style('http://fonts.googleapis.com/css?family=Lato:400,700') !!}
@stop

@section('body')
	<h1>Thank You For Visiting Us</h1>
	{{ HTML::linkRoute('home', 'Back to form page') }}
@stop