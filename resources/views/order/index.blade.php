@extends('layouts.app')

@section('title', 'Item Index')

@section('body')
  @component('layouts.navbar', ['user' => $user])
    @slot('brand')
      Index of Order
    @endslot
  @endcomponent
  <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Seller</th>
      <th>Status</th>
      <th>Created</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($buyer_orders as $buyer_order)
      <tr>
        <td>{{ $buyer_order -> id }}</td>
        <td>{{ $buyer_order  -> seller_id }}</td>
        <td>{{ $buyer_order -> status}}</td>
        <td>{{ $buyer_order -> created_at}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@if ($user -> is_seller || $user -> is_admin)
  <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Buyer</th>
      <th>Status</th>
      <th>Created</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($seller_orders as $seller_order)
      <tr>
        <td>{{ $seller_order -> id }}</td>
        <td>{{ $seller_order  -> buyer_id }}</td>
        <td>{{ $seller_order -> status}}</td>
        <td>{{ $seller_order -> created_at}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endif
@endsection
