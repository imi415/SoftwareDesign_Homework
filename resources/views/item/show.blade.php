@extends('layouts.app')

@section('title')
  Show - {{ $item -> name }}
@endsection

@section('body')
  <!-- Nav -->
  @component('layouts.navbar', ['user' => $user])
    @slot('brand')
      Wow! Such brand
    @endslot

  @endcomponent
  <a href="{{ action('OrderController@new', ['id' => $item -> id]) }}" class="btn btn-primary" role="button">Purchase now</a>
  <!-- Item Details -->
  @component('item.layouts.detail', ['item' => $item])
    <!-- Nope.. -->
  @endcomponent
@endsection
