@extends('layouts.app')

@section('title', 'Test title.')

@section('body')
  @component('layouts.navbar', ['user' => $user])
    @slot('brand')
      e-Commerce System
    @endslot
  @endcomponent
  <div class="jumbotron">
    <h1><i class="fa fa-warning"></i> An e-Commerce System</h1>
    <p><i class="fa fa-info-circle"></i> Not completed due to lack of time.</p>
  </div>
@endsection
