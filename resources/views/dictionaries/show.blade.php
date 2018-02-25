
@extends('layouts.base', ['title' => 'show'] )

@section('content')
  <h1>{{ $dictionary->word }}</h1>
  <p>{{ $dictionary->definition }}</p>
  <p>{{ $dictionary->category }}</p>
  <p>{{ $dictionary->date }}</p>


  <a href="{{ route('dictionaries.edit', $dictionary->id) }}" class="btn btn-primary">Editer</a>

  <div class="pull-right">
    {!! Form::open([
              'method' => 'DELETE',
              'route' => ['dictionaries.destroy', $dictionary->id]
          ]) !!}
              {!! Form::submit('Effacer ce post', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
  </div>

@endsection