@extends('layouts.master')

@section('header-text')

<h1 class="title" style="font-size: 4em; font-weight: 100;">
	Case Search
</h1>

@endsection

@section('content')

<section style="margin: 5em 0em;">
	<div class="container">
		<form action="/missing/search" method="post" class="columns">
			{{ csrf_field() }}
			<div class="field column is-12">
				<label class="label">Search Query</label>
				<div class="control">
					<input class="input" type="text" name="term" placeholder="Search..." style="padding: 20px; font-size: 24px;">
				</div>
			</div>
		</form>
		@if(count($results)>0)
			<div class="container-fluid">
				@foreach($results as $result)
				<a href="/missing/{{$result->id}}" class="columns" style="border: 1px solid rgb(219, 219, 219);">
					<div class="column is-3">
						<img src="{{asset('images/'.$result->photo)}}" class="img-responsive" alt="">
					</div>
					<div class="column is-9">
						<span style="font-size: 2em">
							{{$result->name}}
						</span>
						<br>
						<span style="font-size: 1.5em">
							{{$result->age}} Year Old - {{$result->gender}}
						</span>
						<br>
						<span style="font-size: 1.5em">
							Missing Since: <br>
							{{\Carbon\Carbon::parse($result->missing_since)->toFormattedDateString()}}
						</span>
					</div>
				</a>
				@endforeach
			</div>
		@endif
	</div>
</section>

@endsection