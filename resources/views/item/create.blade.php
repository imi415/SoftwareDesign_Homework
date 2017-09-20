@extends('layouts.app')

@section('title', 'Item Index')

@section('body')
  @component('layouts.navbar')
    @slot('brand')
      Index of Show
    @endslot
  @endcomponent
  <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{ $item -> name }} has been created.</strong>.
  </div>
@endsection
