@extends('layouts.app')

@section('title', 'Show - '.$id)

@section('body')
  @component('layouts.navbar')
    @slot('brand')
      Wow! Such brand
    @endslot
  @endcomponent

@endsection
