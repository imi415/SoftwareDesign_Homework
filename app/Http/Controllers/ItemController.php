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
    return $request;
  }

  // Show Item
  public function show($id) {
    return view('item.show', ['id' => $id]);
  }

  // Update Item page
  public function edit() {

  }

  // Update operation
  public function update() {

  }

  // Delete item page.
  public function delete() {
  }

  // Delete operation
  public function destroy() {

  }
}
