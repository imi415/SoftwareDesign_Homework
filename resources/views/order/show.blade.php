@extends('layouts.app')

@section('title', 'Item Index')

@section('body')
  @component('layouts.navbar')
    @slot('brand')
      ID {{ $order -> id }}  of Order
    @endslot
  @endcomponent
  {{ $order }}
  @foreach ($order_items as $order_item)
    {{ $order_item }}
  @endforeach
@endsection
