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
    // Retrieve from POST data.
    $item -> name = $request -> name;
    $item -> image_url = $request -> image_url;
    $item -> description = $request -> description;
    $item -> is_available = ($request -> is_available == 'on') ? true : false;
    $item -> available_amount = intval($request -> available_amount);
    $item -> price = floatval($request -> price);

    // Add by me.
    $item -> seller = 1;
    $item -> save();
    return $request;
  }

  // Show Item
  public function show($id) {
    $item = Item::where('id', intval($id)) -> get();
    return view('item.show', ['item' => $item[0]]);
  }

  // Update Item page
  public function edit($id) {
    $item = Item::where('id', intval($id)) -> get();
    return view('item.edit', ['item' => $item[0]]);
  }

  // Update operation
  public function update(Request $request, $id) {
    $itemArr = Item::where('id', intval($id)) -> get();
    $item = $itemArr[0];

    $item -> name = $request -> name;
    $item -> image_url = $request -> image_url;
    $item -> description = $request -> description;
    $item -> is_available = ($request -> is_available == 'on') ? true : false;
    $item -> available_amount = intval($request -> available_amount);
    $item -> price = floatval($request -> price);

    $item -> save();
    return $request;
  }

  // Delete item page.
  public function delete($id) {

  }

  // Delete operation
  public function destroy() {

  }
}
