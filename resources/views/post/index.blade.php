@extends('app')

@section('content')
	<div>
		{!! link_to_route('post', 'Published')!!} &nbsp;&nbsp;&nbsp;{!! link_to_route('post.unpublished','Unpublished')!!}
	</div>
	@foreach($posts as $post)
		<article>
			<h2>{!!$post->title!!}</h2>
			<p>
				{!!$post->excerpt!!}
			</p>
			<p>
				published: {!!$post->published_at!!}
			</p>
		</article>
	@endforeach 

@stop