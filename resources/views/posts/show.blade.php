
@extends('layouts.base', ['title' => 'create'] )

@section('content')
  <h1>{{ $post->title }}</h1>
  <p>{{ $post->date }}</p>
  <p>{{ $post->desc }}</p>
  <p>{{ $post->dificulties }}</p>
  <p>{{ $post->acquired }}</p>
  <p>{{ $post->codingTime }}</p>


  <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editer</a>

  <div class="pull-right">
    {!! Form::open([
              'method' => 'DELETE',
              'route' => ['posts.destroy', $post->id]
          ]) !!}
              {!! Form::submit('Effacer ce post', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
  </div>


@endsection
