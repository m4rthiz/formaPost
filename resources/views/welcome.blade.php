
@extends('layouts.base', ['title' => 'home'] )

@section('content')
  <div class="row justify-content-center">
    <h1 col-4> Welcome {{ $name }}</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-4 todo">
        <h3>For today :</h3>
        <div>
          @if ($isWeekEnd)
            <h3>Post your week !!</h3>
          @endif
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6">
        <h2>{{ $date }}</h2>
      </div>
      <div class="col-6">
        <h2>{{ $hour }}</h2>
      </div>

    </div>


  @endsection
