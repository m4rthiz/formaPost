@extends('layouts.base', ['title' => 'index'] )

@section('content')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Mot</th>
        <th scope="col">definition</th>
      </tr>
    </thead>
    @foreach ($dictionaries as $word)
    <tbody>
      <tr>
          <th> <a href="{{ route('dictionaries.show', $word->id) }}">{{ $word->id }}</a></th>
          <td> <a href="{{ route('dictionaries.edit', $word->id) }}">editer</a>        </td>
          <td>{{ $word->word}}</td>
          <td>{{ $word->definition}}</td>
        </tr>
      </tbody>
    @endforeach
    </table>
@endsection
