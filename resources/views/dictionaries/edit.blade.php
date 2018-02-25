@extends('layouts.base', ['title' => 'create'] )

@section('content')

  <h1>Editer le mot {{ $dictionary->word }}</h1>

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

{!! Form::model($dictionary, [
    'method' => 'PATCH',
    'route' => ['dictionaries.update', $dictionary->id]
]) !!}

    
<div class="form-group">
    {!! Form::label('word', 'Mot:', ['class' => 'control-label']) !!}
    {!! Form::text('word', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('definition', 'Definition:', ['class' => 'control-label']) !!}
    {!! Form::textarea('definition', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('category', 'categorie:', ['class' => 'control-label']) !!}
    {!! Form::text('category', null, ['class' => 'form-control']) !!}
</div>


    {!! Form::submit('enregistrer', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

  @endsection