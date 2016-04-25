@extends('layout')

@section('content')
	<h1>All Cards</h2>
	<img src="/images/img.jpg">
	
	@foreach( $cards as $card )
	<div>
	<a href = "cards/{{ $card->id}}">{{ $card -> title }}</a>
	</div>
	@endforeach
@stop