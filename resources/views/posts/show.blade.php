@extends('layouts.default')

@section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<p><a href="/">Back</a></p>
@stop
