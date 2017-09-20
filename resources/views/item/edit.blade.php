@extends('layouts.app')

@section('title', 'Item Index')

@section('body')
  @component('layouts.navbar')
    @slot('brand')
      Index of Show
    @endslot
  @endcomponent
  @component('item.layouts.form')
    @slot('form_url', action('ItemController@update', ['id' => $item -> id]))
    @slot('form_method', 'post')
    @slot('form_hidden_put')
      <input type="hidden" name="_method" value="put" />
    @endslot
    @slot('item', $item)
    <!-- Add corresponding URL as parameter. -->
  @endcomponent
@endsection
