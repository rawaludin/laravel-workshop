@extends('layouts.default')

@section('content')
  {!! Form::model($post, ['route'=>['posts.update', $post->id], 'method'=>'put']) !!}
    <legend>Edit Post</legend>
    @include('posts._form')
    {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
    <a href="{{ route('posts.index')}}">Back</a>
  {!! Form::close() !!}
@stop
