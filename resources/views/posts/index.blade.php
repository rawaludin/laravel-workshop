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
      <td><a href="{{ route('post.show', $post->id)}}">{{ $post->title }}</a></td>
      <td>{{ $post->category->title }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
