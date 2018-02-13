@extends('base')

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
        <th scope="row">{{$post->id}}</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

@endsection
