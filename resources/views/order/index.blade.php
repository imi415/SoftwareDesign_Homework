@extends('layouts.app')

@section('title', 'Item Index')

@section('body')
  @component('layouts.navbar')
    @slot('brand')
      Index of Order
    @endslot
  @endcomponent
  {{ $user }}
  @foreach ($buyer_orders as $buyer_order)
    {{ $buyer_order }}
  @endforeach
  @foreach ($seller_orders as $seller_order)
    {{ $seller_order }}
  @endforeach
@endsection
