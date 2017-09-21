@extends('layouts.app')

@section('title', 'Home')

@section('body')
  @component('layouts.navbar', ['user' => $user])
    @slot('brand')
      Index of Show
    @endslot
  @endcomponent
  <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Item ID</th>
      <th>Image</th>
      <th>Name</th>
      <th>Price</th>
      <th>Availablity</th>
      <th>On Shelf</th>
      <th>Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($items as $item)
      <tr>
        <td>{{ $item -> id }}</td>
        <td><img src="/{{ $item -> image_url }}" height="50px" alt="No pic you say..."></td>
        <td>{{ $item -> name }}</td>
        <td>${{ $item -> price }}</td>
        <td>{{ $item -> available_amount }}</td>
        <td>{{ $item -> is_available }}</td>
        <td><a class="btn btn-primary" href="{{ action('ItemController@edit', ['id' => $item -> id]) }}">EDIT</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
