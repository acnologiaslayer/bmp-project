@extends('layouts.master')

@section('header-text')

<h1 class="title" style="font-size: 4em; font-weight: 100;">
	Case Search
</h1>

@endsection

@section('content')

<section style="margin: 5em 0em;">
	<div class="container">
		<form action="#" method="post" class="columns is-multiline">
			<div class="field column is-4">
				<label class="label">Name</label>
				<div class="control">
					<input class="input" type="text" name="name">
				</div>
			</div>

			<div class="field column is-4">
				<label class="label">National Id/Birth Certificate</label>
				<div class="control">
					<input class="input" type="text" name="nid">
				</div>
			</div>

			<div class="field column is-4">
				<label class="label">Age</label>
				<div class="control">
					<input class="input" type="text" name="age">
				</div>
			</div>

			<div class="field column is-2">
				<label class="label">Gender</label>
				<div class="control">
					<div class="select">
						<select name="gender">
							<option>Male</option>
							<option>Female</option>
							<option>Third Gender</option>
						</select>
					</div>
				</div>
			</div>

			<div class="field column is-2">
				<label class="label">Photo</label>
				<div class="file">
					<label class="file-label">
						<input class="file-input" type="file" name="photo">
						<span class="file-cta">
							<span class="file-icon">
								<i class="fa fa-upload"></i>
							</span>
							<span class="file-label">
								Upload a photo
							</span>
						</span>
					</label>
				</div>
			</div>

			<div class="field column is-4">
				<label class="label">Father's Name</label>
				<div class="control">
					<input class="input" type="text" name="father">
				</div>
			</div>

			<div class="field column is-4">
				<label class="label">Mother's Name</label>
				<div class="control">
					<input class="input" type="text" name="mother">
				</div>
			</div>

			<div class="field column is-4">
				<label class="label">Area</label>
				<div class="control">
					<input class="input" type="text" name="area">
				</div>
			</div>

			<div class="field column is-4">
				<label class="label">Missing Since</label>
				<div class="control">
					<input class="input" type="date" name="missing_since">
				</div>
			</div>

			<div class="field column is-4">
				<label class="label">Last Worn Clothes</label>
				<div class="control">
					<input class="input" type="date" name="clothes">
				</div>
			</div>

			<div class="field column is-12">
				<label class="label">Description</label>
				<div class="control">
					<textarea class="textarea" type="date" name="description" placeholder="Please descripbe what the missing person looks like..."></textarea>
				</div>
			</div>

			<div class="field column">
				<div class="control">
					<input type="submit" value="Search" class="button is-mancante">
				</div>
			</div>
		</form>
	</div>
</section>

@endsection