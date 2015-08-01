@extends('layouts.default')

@section('content')
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
      <td><a href="{{ route('posts.show', $post->id)}}">{{ $post->title }}</a> <span class="pull-right">
        {!! Form::model($post, ['route'=>['posts.destroy', $post->id], 'method'=>'delete', 'class'=>'form-inline']) !!}
          <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
          {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
      </span></td>
      <td>{{ $post->category->title }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ route('posts.create') }}" class="btn btn-primary">New Post</a>
@stop
