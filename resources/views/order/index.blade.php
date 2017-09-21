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
      <th>#</th>
      <th>Column heading</th>
      <th>Column heading</th>
      <th>Column heading</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
  {{ $user }}
  @foreach ($buyer_orders as $buyer_order)
    {{ $buyer_order }}
  @endforeach
  @foreach ($seller_orders as $seller_order)
    {{ $seller_order }}
  @endforeach
@endsection
