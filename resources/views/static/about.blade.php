<!-- Global layout -->
@extends('layouts.app')

@section('title', 'About')

@section('body')
  <!-- Nav -->
  @component('layouts.navbar')
    @slot('brand')
      Wow! Such Brand
    @endslot
  @endcomponent
  <h1>About</h1>
  <blockquote>
    <p>Credits</p>
    <!-- -->
  </blockquote>
@endsection
