@extends('layouts.base', ['title' => 'create'] )

@section('content')

  <h1>Editer le post {{ $post->title }}</h1>

  @if($errors->any())
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
    </div>
  @endif

@if (Session::has('flash_message'))
  <div class="alert alert-success">
    {{ Session::get('flash_message') }}
  </div>

@endif

{!! Form::model($post, [
    'method' => 'PATCH',
    'route' => ['posts.update', $post->id]
]) !!}

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
