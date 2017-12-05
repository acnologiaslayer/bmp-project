@extends('layouts.master')

@section('header-text')

<h1 class="title" style="font-size: 4em; font-weight: 100;">
	Missing <span style="color: #f8c91c;">People</span>
</h1>

@endsection

@section('content')

<section style="margin-top: 5rem;">
		<div class="container-fluid">
			<div class="columns is-multiline">
				<div class="column is-4 is-offset-2 has-text-left">
					<a href="/missing/search" style="color:#000; font-size: 1.5em; font-weight: 800;">
						​​Case <span style="color: #f8c91c;">Search</span>
					</a>
					<p style="font-size: 1em; font-weight: light; margin-left: -10px" class="column is-10">
						Search for your family and friends who are missing.
					</p>
				</div>
				<div class="column is-6"></div>
				<div class="column is-4 is-offset-2 has-text-left">
					<a href="/missing/list" style="color:#000; font-size: 1.5em; font-weight: 800;">
						​​Missing <span style="color: #f8c91c">List</span>
					</a>
					<p style="font-size: 1em; font-weight: light; margin-left: -10px" class="column is-10">
						See the people who are still missing.
					</p>
				</div>
			</div>
		</div>
	</section>

@endsection