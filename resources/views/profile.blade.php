@extends('layouts.master')

@section('header-text')

<h1 class="title" style="font-size: 4em; font-weight: 100;">
	Missing Person
</h1>

@endsection

@section('content')

<div class="container" style="margin-top: 3em; margin-bottom: 5em;">
	<div class="columns is-multiline">
		<div class="column is-4">
			<img src="{{ asset('/images/'.$person->photo) }}" alt="No Photo">
		</div>
		<div class="column is-8">
			<h1 style="font-size: 3em;">{{$person->name}}</h1>
			<h3 style="font-size: 2em;">{{$person->gender}} - {{$person->age}} years old.</h3>
			<h3 style="font-size: 1.8em;">National ID/ Birth Certificate No.<br>{{$person->nid}}</h3>
		</div>
		<div class="column is-3">
			<h3 style="font-size: 2em;">Father's Name</h3>
			<h3 style="font-size: 1.5em;">{{$person->father}}</h3>
		</div>
		<div class="column is-3">
			<h3 style="font-size: 2em;">Mother's Name</h3>
			<h3 style="font-size: 1.5em;">{{$person->mother}}</h3>
		</div>
		<div class="column is-3">
			<h3 style="font-size: 2em;">Area</h3>
			<h3 style="font-size: 1.5em;">{{$person->area}}</h3>
		</div>
		<div class="column is-3">
			<h3 style="font-size: 2em;">Missing Since</h3>
			<h3 style="font-size: 1.5em;">{{\Carbon\Carbon::parse($person->missing_since)->toFormattedDateString()}}</h3>
		</div>
		<div class="column is-6">
			<h3 style="font-size: 2em;">Last Seen Wearing</h3>
			<h3 style="font-size: 1.5em;">{{$person->clothes}}</h3>
		</div>
		<div class="column is-6">
			<h3 style="font-size: 2em;">Description</h3>
			<h3 style="font-size: 1.5em;">{{$person->description}}</h3>
		</div>
	</div>
</div>

@endsection