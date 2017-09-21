@extends('layouts.app')

@section('title', 'Item Index')

@section('body')
  @component('layouts.navbar', ['user' => $user])
    @slot('brand')
      Index of Show
    @endslot
  @endcomponent
  <div class="panel panel-warning">
  <div class="panel-heading">
    <h3 class="panel-title">Logout Confitm</h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" enctype="multipart/form-data" action="{{ url('/logout') }}" method="post">
      <button type="reset" class="btn btn-default">Cancel</button>
      <button type="submit" class="btn btn-primary">Submit</button>
      {{ csrf_field() }}
    </form>
  </div>
</div>
@endsection
