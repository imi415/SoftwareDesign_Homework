@extends('layouts.app')

@section('title', 'Home')

@section('body')
  @component('layouts.navbar', ['user' => $user])
    @slot('brand')
      Index of Show
    @endslot
  @endcomponent
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">Home</div>
      <div class="panel-body">
        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif
        You are logged in!
      </div>
    </div>
  </div>
@endsection
