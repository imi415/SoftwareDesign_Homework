@extends('layouts.app')

@section('title', 'Item Index')

@section('body')
  @component('layouts.navbar', ['user' => $user])
    @slot('brand')
      Index of Order
    @endslot
  @endcomponent
  <div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Order Information</h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
        <li class="list-group-item"> ID <span class="badge">{{ $item -> id }}</span></li>
        <li class="list-group-item"> Name <span class="badge">{{ $item -> name }}</span></li>
        <li class="list-group-item"> Price <span class="badge">${{ $item -> price }}</span></li>
      </ul>
    <form class="form-horizontal" action="{{ action('OrderController@create', ['id' => $item -> id]) }}" method="post">
      {{ csrf_field() }}
    <fieldset>
      <div class="form-group">
        <div class="col-lg-4">
          <button type="reset" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
  </div>
</div>
@endsection
