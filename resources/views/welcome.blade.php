
@extends('layouts.base', ['title' => 'home'] )

@section('content')
    <h1> Blog</h1>

    <h2>{{ $post}}</h2>

    {{ $name }}

@endsection
