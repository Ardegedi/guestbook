@extends('app')

@section('content')
	<div>
		{!! link_to_route('post', 'Published')!!} &nbsp;&nbsp;&nbsp;{!! link_to_route('post.unpublished','Unpublished')!!}
	</div>
	<article>
		<h1>{!!$post->title!!}</h1>
		<p>
			{!!$post->excerpt!!}
		</p>
		<p>
			{!!$post->content!!}
		</p>
		<p>
			published: {!!$post->published_at!!}
		</p>
	</article>
@stop