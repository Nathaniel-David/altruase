@extends('layouts.app')

@section('content')

<div class="row intro-header" style="background-image: url('img/brick-bg1.jpg')">
	<div class="col-md-12" style="margin-top: 50px; margin-bottom: 40px;">
		<div class="col-md-3">
			<div class="art-frame">
				<img src="img/art/fish.jpeg">
			</div>
		</div>
		<div class="col-md-6">
			<div class="video-frame">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/4tQjf0lKuEg" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-3">
			<div class="article-frame">
				<h3><strong>Things Aren’t As Bad As They Seem - An Optimist’s View of the World</strong></h3>
				<hr>
				<p>Bad news abounds these days. Violence. Hate. War. Terrorism. Environmental destruction. Political insanity. It all seems so...bad. And I don’t know about you, but when my social media feed is filled with the news it has been of late, each story more disturbing than the last, I start to lose hope...</p>
			</div>
		</div>
	</div>
	<div class="container quote">
		<div class="col-md-10 col-md-offset-1 quote-frame">
			<h3>"Everything works out in the end, and if it's not working out,
			then it's not the end."</h3>
			<hr>
			<p>- Bob The DragQueen</p>
		</div>
	</div>
</div>

@endsection