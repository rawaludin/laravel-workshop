@extends('layouts.default')

@section('content')
@if (Auth::check())
    Welcome, {{ Auth::user()->name }}! <a href="/auth/logout" class="btn btn-primary">Logout</a>
@else
  <a href="/auth/login">Login</a> | <a href="/auth/register">Register</a>
@endif
<table class="table table-hover">
  <thead>
    <tr>
      <th>Title</th>
      <th>Category</th>
    </tr>
  </thead>
  <tbody>
    @foreach (App\Post::all() as $post)
    <tr>
      <td><a href="{{ route('posts.show', $post->id)}}">{{ $post->title }}</a>
      @if (Auth::check())
      <span class="pull-right">
        {!! Form::model($post, ['route'=>['posts.destroy', $post->id], 'method'=>'delete', 'class'=>'form-inline']) !!}
          <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
          {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
      </span>
      @endif
      </td>
      <td>{{ $post->category->title }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@if (Auth::check())
  <a href="{{ route('posts.create') }}" class="btn btn-primary">New Post</a>
@endif
@stop
