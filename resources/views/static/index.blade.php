@extends('layouts.app')

@section('title', 'Test title.')

@section('body')
  @component('layouts.navbar')
    @slot('brand')
      Wow! Such Brand
    @endslot
  @endcomponent
  <div class="jumbotron">
    <h1><i class="fa fa-warning"></i> Under construction</h1>
    <p><i class="fa fa-info-circle"></i> </p>
    <p><a class="btn btn-primary btn-lg">Learn more</a></p>
  </div>
@endsection
