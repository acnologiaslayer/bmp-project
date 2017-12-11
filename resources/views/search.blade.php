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
				<a href="/missing/{{$result->id}}">
					<div class="is-fullwidth" style="border: 1px solid rgb(219, 219, 219); padding: 2%;">
						{{$result->name}}
					</div>
				</a>
				@endforeach
			</div>
		@endif
	</div>
</section>

@endsection