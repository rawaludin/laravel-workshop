@extends('layouts.default')

@section('content')
  {!! Form::open(['route'=>'posts.store']) !!}
    <legend>New Post</legend>
    @include('posts._form')
    {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
    <a href="{{ route('posts.index')}}">Back</a>
  {!! Form::close() !!}
@stop
