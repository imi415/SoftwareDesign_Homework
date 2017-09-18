@extends('layouts.app')

@section('title', 'Item Index')

@section('body')
  @component('layouts.navbar')
    @slot('brand')
      Index of Show
    @endslot
  @endcomponent
{{ $items }}
@endsection
