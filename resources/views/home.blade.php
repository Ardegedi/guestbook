@extends('app')

@section('banner')
<div id="banner">
	<div class="container">
		<div class="title">
			<h2>G U E S T B O O K</h2>
		</div>
		<ul class="actions">
			<li><a href="#" class="button">Comment</a></li>
		</ul>
	</div>
</div>
@stop

@section('content')
<div class="title">
			<h2>Main sections</h2>
			</div>

		<div id="three-column">
			<div class="boxA">
				<div class="box"> 
					<h2>Posts</h2>
					<p>Praesent pellentesque facilisis elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
				</div>
				<ul class="actions">
					<li><a href="#" class="button">Read posts</a></li>
				</ul>
			</div>
			<div class="boxB">
				<div class="box">
				<h2>Comments</h2>
					<p>Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis.</p>
				</div>
				<ul class="actions">
					<li><a href="#" class="button">Add comment</a></li>
				</ul>
			</div>
			<div class="boxC">
				<div class="box">
				<h2>Development</h2>
					<p> Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus.</p>
				</div>
				<ul class="actions">
					<li><a href="#" class="button">Develop</a></li>
				</ul>
			</div>
		</div>
		
@stop