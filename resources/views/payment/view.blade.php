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
    <h3 class="panel-title">Payment</h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
        <li class="list-group-item"> ID <span class="badge">{{ $order -> id }}</span></li>
        <li class="list-group-item"> Price <span class="badge">${{ $price }}</span></li>
        <li class="list-group-item"> Shipping <span class="badge">${{ $order -> shipping_fee }}</span></li>
      </ul>
      <form class="form-horizontal" action="{{ action('PaymentController@pay', ['id' => $order -> id]) }}" method="post">
        {{ csrf_field() }}
      <fieldset>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="reset" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-primary">Pay ${{ $order -> shipping_fee + $price }}</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
@endsection
