@extends('layouts.app')

@section('title', 'New')

@section('body')
  @component('layouts.navbar')
    @slot('brand')
      New of Show
    @endslot
  @endcomponent
  @component('item.layouts.form')
    @slot('form_url', url('/item/new'))
    @slot('form_method', 'post')
    @slot('form_hidden_put', '')
    <!-- Add corresponding URL as parameter. -->
  @endcomponent
@endsection
