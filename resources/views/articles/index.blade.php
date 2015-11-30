@extends('app')

@section('title')
Articles
@stop

@section('content')
<h1>Articles</h1>
@if (count($articles))
<ul>
	@foreach ($articles as $article)
		<article>
			<h2><a href="{{action('ArticlesController@show', [$article->id])}}">{{$article->title}}</a><h2>
			<ul>
				<li>{{$article->id}}</li>
				<li>{{$article->Body}}</li>
				<li>{{$article->created_at}}</li>
				<li>{{$article->update_at}}</li>
			</ul>
		</article>
	@endforeach
</ul>
@else
<p>no article</p>
@endif

@stop