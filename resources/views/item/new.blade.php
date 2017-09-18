@extends('layouts.app')

@section('title', 'New')

@section('body')
  @component('layouts.navbar')
    @slot('brand')
      New of Show
    @endslot
  @endcomponent
  @component('item.layouts.form')
    @slot('post_url')
      
    @endslot
    <!-- Add corresponding URL as parameter. -->
  @endcomponent
@endsection
