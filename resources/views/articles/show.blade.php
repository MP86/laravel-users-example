@extends('app')

@section('title')
{{$article->title}}
@stop

@section('content')
<h1>{{$article->Title}}</h1>
<ul>
	<li>{{$article->id}}</li>
	<li>{{$article->body}}</li>
	<li>{{$article->timestamp}}</li>
</ul>
@stop