@extends('layouts.base', ['title' => 'index'] )

@section('content')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">date</th>
        <th scope="col">titre</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($posts as $post)
          <th> <a href="{{ route('posts.show', $post->id) }}">{{ $post->id }}</a></th>
          <td> <a href="{{ route('posts.edit', $post->id) }}">editer</a>        </td>

          <td>{{ $post->date}}</td>
          <td>{{ $post->title}}</td>
        @endforeach
        </tr>
      </tbody>
    </table>
@endsection
