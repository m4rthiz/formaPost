@extends('layouts.base', ['title' => 'create'])

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

<h1>Ajouter un nouveau mot</h1>

{!! Form::open([
    'route' => 'dictionaries.store'
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

{!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop