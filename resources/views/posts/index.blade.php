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
          <th scope="row">{{$post->id}}</th>
          <td>{{ $post->date}}</td>
          <td>{{ $post->title}}</td>
        @endforeach
        </tr>
      </tbody>
    </table>
@endsection
