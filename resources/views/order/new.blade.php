@extends('layouts.app')

@section('title', 'Item Index')

@section('body')
  @component('layouts.navbar')
    @slot('brand')
      Index of Order
    @endslot
  @endcomponent
  {{ $item }}
  <form class="form-horizontal" action="{{ action('OrderController@create', ['id' => $item -> id]) }}" method="post">
    {{ csrf_field() }}
  <fieldset>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
@endsection
