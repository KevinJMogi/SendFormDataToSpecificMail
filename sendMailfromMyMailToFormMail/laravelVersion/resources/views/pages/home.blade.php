@extends('layouts.Layout')

@section('head')
	<title>Visitor</title>

	{!! Html::style('css/FormStyle.css') !!}
	{!! Html::style('http://fonts.googleapis.com/css?family=Lato:400,700') !!}
@stop

@section('body')
	{!!Form::open(['route'=>'store'])!!}

	  <h6>Visitor</h6>

	  {!! Form::text('name',null,[ 'placeholder'=>'Name' , 'required']) !!}

	  {!! Form::email('email', null, ['placeholder' => 'Email', 'required']) !!}

	  {!! Form::text('phone',null,
	  	  [
		    'placeholder'=>'Phone' ,
		    'required' => 'required',
		    'pattern'=>'[0-9]{1,}',
		    'onchange'=>'setCustomValidity("")',
		    'oninvalid'=>'setCustomValidity("Please fill the field with number only")' 
		  ])
	  !!}

	  {!! Form::text('occupation',null ,['placeholder'=>'Occupation', 'required'])!!}

	  {!! Form::submit('Sign Up')!!}

	{!! Form::close()!!}
@stop