@extends('layouts.master')

@section('header-text')

<h1 class="title" style="font-size: 4em; font-weight: 100;">
	Missing People
</h1>

@endsection

@section('content')

<section style="margin: 5em 0em;">
	<div class="container">
		<table id="missingTable" class="table is-fullwidth is-striped is-hoverable">
			<thead>
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Missing Since</th>
					<th>Photo</th>
					<th>Details</th>
				</tr>
			</thead>
			<tbody>
				@foreach($people as $person)
				<tr>
					<td>{{$person->name}}</td>
					<td>{{$person->age}}</td>
					<td>{{$person->missing_since}}</td>
					<td><img src="{{ asset('/images/'.$person->photo) }}" alt="photo" style="height: 100px"></td>
					<td>
						<a href="/missing/{{$person->id}}">See Details</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</section>

@endsection

@push('scripts')
<script>
	$('#missingTable').DataTable();
</script>
@endpush