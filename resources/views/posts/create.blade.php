@extends('layouts.base', ['title' => 'create'] )

@section('content')

  <h1>ajouter un post</h1>

  {!! Form::open([
    'route' => 'posts.store'
    ])!!}

    <div class="form-group">
      {!! Form::label('title', 'Titre:', ['class' => 'control-label']) !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('date', 'Date:', ['class' => 'control-label']) !!}
      {!! Form::date('date', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('desc', 'Description:', ['class' => 'control-label']) !!}
      {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('dificulties', 'Difficultés:', ['class' => 'control-label']) !!}
      {!! Form::textarea('dificulties', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('acquired', 'Acquis:', ['class' => 'control-label']) !!}
      {!! Form::textarea('acquired', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('codingTime', 'Temps de code:', ['class' => 'control-label']) !!}
      {!! Form::time('codingTime', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('enregistrer', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

  @endsection
