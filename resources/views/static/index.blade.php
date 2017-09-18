@extends('layouts.app')

@section('title', 'Test title.')

@section('body')
  @component('layouts.navbar')
    @slot('brand')
      Wow! Such Brand
    @endslot
  @endcomponent
@endsection
