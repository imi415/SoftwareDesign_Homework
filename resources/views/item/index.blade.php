@extends('layouts.app')

@section('title', 'Item Index')

@section('body')
  @component('layouts.navbar', ['user' => $user])
    @slot('brand')
      Index of Show
    @endslot
  @endcomponent
@foreach ($items as $item)
  @component('item.layouts.card', ['item' => $item])

  @endcomponent
@endforeach
@endsection
