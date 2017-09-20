@extends('layouts.app')

@section('title', 'Item Index')

@section('body')
  @component('layouts.navbar')
    @slot('brand')
      Index of Show
    @endslot
  @endcomponent
  <div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title">Delete confirmation</h3>
  </div>
  <div class="panel-body">
    Delete item {{ $item -> name }} ?
    <form method="POST">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="delete" />
      <button type="reset" class="btn btn-default">Cancel</button>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection
