@extends('master')

@section('content')
	@foreach($menus as $menu)
		<h4>{{ $menu }}</h4>
	@endforeach
@stop