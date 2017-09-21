@extends('layouts.app')

@section('title', 'Item Index')

@section('body')
  @component('layouts.navbar', ['user' => $user])
    @slot('brand')
      ID {{ $order -> id }}  of Order
    @endslot
  @endcomponent
  <div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Order {{ $order -> id }} Information</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th>Item ID</th>
        <th>Name</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($order_items as $order_item)
      <tr>
        <td>{{ $order_item -> id }}</td>
        <td>{{ $order_item -> name }}</td>
        <td>${{ $order_item -> real_price }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>
@endsection
