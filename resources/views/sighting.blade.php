@extends('layouts.master')

@section('header-text')

<h1 class="title" style="font-size: 4em; font-weight: 100;">
	Report a <span style="color: #f8c91c;">sighting.</span>
</h1>

@endsection

@section('content')

<section style="margin: 5em 0em;">
		<div class="container">
			<form action="/reportSighting" method="post" class="columns is-multiline">
				{{ csrf_field() }}
				<h1 class="title column is-12">Name of Missing Person</h1>
				<div class="field column is-4">
					<label class="label">First Name</label>
					<div class="control">
						<input class="input" type="text" name="mfname">
					</div>
				</div>
				<div class="column is-8"></div>
				<div class="field column is-4">
					<label class="label">Last Name</label>
					<div class="control">
						<input class="input" type="text" name="mlname">
					</div>
				</div>
				<div class="column is-8"></div>
				<h1 class="title column is-12">Date &amp; Time of Sighting</h1>
				<div class="field column is-4">
					<label class="label">Date</label>
					<div class="control">
						<input class="input" type="date" name="date">
					</div>
				</div>
				<div class="column is-8"></div>
				<div class="field column is-4">
					<label class="label">Time</label>
					<div class="control">
						<input class="input" type="text" name="time">
					</div>
				</div>
				<div class="column is-8"></div>
				<h1 class="title column is-12">Location of Sighting</h1>
				<div class="field column is-4">
					<label class="label">Where did you see this person?</label>
					<div class="control">
						<input class="input" type="text" name="location">
					</div>
				</div>
				<div class="column is-8"></div>
				<div class="field column is-4">
					<label class="label">Is there any CCTV at the location?</label>
					<div class="control">
						<input class="input" type="text" name="cctv">
					</div>
				</div>
				<div class="column is-8"></div>
				<h1 class="title column is-12">Appearance</h1>
				<div class="field column is-4">
					<label class="label">What did the missing person look like?</label>
					<div class="control">
						<textarea class="textarea" type="text" name="description"></textarea>
					</div>
				</div>
				<div class="column is-8"></div>
				<div class="field column is-4">
					<label class="label">What was the missing person wearing?</label>
					<div class="control">
						<textarea class="textarea" type="text" name="clothes"></textarea>
					</div>
				</div>
				<div class="column is-8"></div>
				<h1 class="title column is-12">
					About You
					<p style="font-size: 16px; font-weight:100; margin-top: 5px;">All information we receive is passed to the police. Your identity will remain confidential to us unless you indicate that it is ok for us to pass your details on to the police. The police often do want to speak to the person who saw the missing person to check details and help them find the person.</p>
				</h1>
				<div class="field column is-4">
					<label class="label">Name</label>
					<div class="control">
						<input class="input" type="text" name="sname">
					</div>
				</div>

				<div class="field column is-4">
					<label class="label">Email</label>
					<div class="control">
						<input class="input" type="email" name="email">
					</div>
				</div>

				<div class="field column is-4">
					<label class="label">Phone</label>
					<div class="control">
						<input class="input" type="text" name="phone">
					</div>
				</div>
				<div class="field column is-12">
					<label class="label">Address</label>
					<div class="control">
						<textarea class="textarea" type="date" name="address"></textarea>
					</div>
				</div>

				<div class="field column is-12">
					<label class="checkbox">
						<input type="checkbox" name="police">
						The police can have my contact details for further help.
					</label>
				</div>

				<div class="field column">
					<div class="control">
						<input type="submit" value="Submit" class="button is-mancante">
					</div>
				</div>
			</form>
		</div>
	</section>

@endsection