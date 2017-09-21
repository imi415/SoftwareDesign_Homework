<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
  // List
  public function index() {
    $items = \App\Item::all();
    return view('item.index', ['items' => $items]);
  }

  // Create new item page.
  public function new() {
    return view('item.new');
  }

  // Store new item
  public function create(Request $request) {
    $item = new Item;

    $path = '';
    if ($request -> hasFile('image') && $request -> file('image') -> isValid()) {
      $path = $request -> image -> store('images');
    }
    // Retrieve from POST data.
    $item -> name = $request -> name;
    $item -> image_url = $path;
    $item -> description = $request -> description;
    $item -> is_available = ($request -> is_available == 'on') ? true : false;
    $item -> available_amount = intval($request -> available_amount);
    $item -> price = floatval($request -> price);

    // Add by me.
    $item -> seller = 1;
    $item -> save();
    return view('item.create', ['item' => $item]);
  }

  // Show Item
  public function show($id) {
    $item = Item::where('id', intval($id)) -> first();
    return view('item.show', ['item' => $item]);
  }

  // Update Item page
  public function edit($id) {
    $item = Item::where('id', intval($id)) -> first();
    return view('item.edit', ['item' => $item]);
  }

  // Update operation
  public function update(Request $request, $id) {
    $item = Item::where('id', intval($id)) -> first();
    $path = $item -> image_url;
    if ($request -> hasFile('image') && $request -> file('image') -> isValid()) {
      $path = $request -> image -> store('images');
    }
    $item -> name = $request -> name;
    $item -> image_url = $path;
    $item -> description = $request -> description;
    $item -> is_available = ($request -> is_available == 'on') ? true : false;
    $item -> available_amount = intval($request -> available_amount);
    $item -> price = floatval($request -> price);

    $item -> save();
    return view('item.update', ['item' => $item]);
  }

  // Delete item page.
  public function delete($id) {
    $item = Item::where('id', intval($id)) -> first();
    return view('item.delete', ['item' => $item]);
  }

  // Delete operation
  public function destroy($id) {
    $item = Item::where('id', intval($id)) -> first();
    $item ->delete();
    return view('item.destroy', ['item' => $item]);
  }
}
