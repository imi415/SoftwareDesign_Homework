@extends('layouts.app')

@section('title')
  Show - {{ $item -> name }}
@endsection

@section('body')
  <!-- Nav -->
  @component('layouts.navbar')
    @slot('brand')
      Wow! Such brand
    @endslot
    
  @endcomponent
  <!-- Item Details -->
  @component('item.layouts.detail', ['item' => $item])
    <!-- Nope.. -->
  @endcomponent
@endsection
