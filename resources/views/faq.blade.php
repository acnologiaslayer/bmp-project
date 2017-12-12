@extends('layouts.master')

@section('header-text')

<h1 class="title" style="font-size: 4em; font-weight: 100;">
	Frequently Asked Questions
</h1>

@endsection

@section('content')

<section style="margin: 5em 0em;">
	<div class="container">
		<div id="elements">
			<h2 class="title" style="font-size: 1.2em">1. What is our project about?</h2>

			<p style="margin-bottom: 2em">Our project serves as a framework of information for missing persons.It attempts to catalog as much information as possible about as many cases as possible into a database as a investigative aid for the public to help solve cases. A wide variety of sources are used,&nbsp;such as other databases, information supplied by friends and family members of the&nbsp;missing, and all the information contained therein is summarized on each missing person in our project&nbsp; case file. In this way, instead of having to track down, say, twenty different news articles from five different news&nbsp;sources about a missing person, people can simply go to our Project and find it all in one place.</p>

			<h2 class="title" style="font-size: 1.2em">2. My loved one is missing. What should I do?</h2>

			<p style="margin-bottom: 2em">If the person is a minor (under age 18) or adult, contact your local law enforcement agency immediately. Contrary to popular belief, there is no waiting period if reporting a missing child. In addition,&nbsp;also fill out the form on our site to provide extensive information regarding missing children's cases.</p>

			<h2 class="title" style="font-size: 1.2em">3. Does our Project feature every missing person in Bangladesh?</h2>

			<p style="margin-bottom: 2em">No, not by far. It is impossible to determine how many people are reported missing every year,there is no centralized database, and many reports can be misplaced or closed without being solved. In any case, our project profiles only a miniscale number of all the people who disappear every year.<br></p>

			<h2 class="title" style="font-size: 1.2em">4. Can I sell advertising on your website?</h2>

			<p style="margin-bottom: 2em">​&nbsp;No.the administrators do not want ads.</p>

			<h2 class="title" style="font-size: 1.2em">5. I can no longer find a case that was profiled on this site and it is not available anymore. What happened?</h2>

			<p style="margin-bottom: 2em">Certain resolved cases may not be featured in that section at the request of family members or law enforcement&nbsp;officers. In addition, the individual or their family may have requested that his/her privacy be respected. Or a file&nbsp;may be removed for other reasons. Contact the administrator if you want to know about a specific case, although you&nbsp;might not be able to learn anything more.</p>

			<h2 class="title" style="font-size: 1.2em">6. How many members comprise this project? Can I volunteer?</h2>

			<p style="margin-bottom: 2em">It doesn't have any fixed number of volunteers. Anyone can do the role of a volunteer if he/she wants. If you want to volunteer regarding a missing person's case, you can provide all your additional information or details by filling out the&nbsp;form in our volunteer section of this site.</p>

			@if(count($questions)>0)
			@foreach($questions as $index=>$q)
			@if($q->answer != null)
			@if($index < 1)
			<h2 class="title" style="font-size: 1.2em">Other Questions:</h2>
			@endif
			<h2 class="title" style="font-size: 1.2em">{{$q->question}}</h2>
			<p style="margin-bottom: 2em">{{$q->answer}}</p>
			@endif
			@endforeach
			@endif
		</div>
		<h2 class="title" style="font-size: 1.2em">Ask your own questions:</h2>	
		<form action="/askQuestion" method="post">
			{{ csrf_field() }}
			<input type="email" name="sender" placeholder="Contact e-mail" class="column is-12" class="input"><br>
			<textarea id="question" name="question" placeholder="Ask your question here" class="column is-12" cols="150" rows="10"></textarea>
			<button class="button is-dark" style="margin: 1em 0em;" onclick="ask()">Send</button>
		</form>
	</div>
</section>

@endsection