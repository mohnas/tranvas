@extends('layouts.events')

@section('content') 
@foreach ($upcommingEvents as $upcommingEvent)
	<h4>{{ $upcommingEvent->title }}</h4>
	<p>{{ $upcommingEvent->description }}</p>
@endforeach
@endsection