<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Item;

class ItemController extends Controller
{

  // List
  public function index() {
    $user = Auth::user();

    $items = \App\Item::where('is_available', true) -> get();
    return view('item.index', ['items' => $items,
                               'user' => $user]);
  }

  // Create new item page.
  public function new() {
    $this -> middleware('auth');
    $user = Auth::user();
    $this -> check_seller($user);

    return view('item.new');
  }

  // Store new item
  public function create(Request $request) {
    $this -> middleware('auth');
    $user = Auth::user();

    $this -> check_seller($user);
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
    $item -> seller = $user -> id;
    $item -> save();
    return view('item.create', ['item' => $item]);
  }

  // Show Item
  public function show($id) {
    $user = Auth::user();

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

  private function check_seller($user) {
    if (!($user -> is_seller || $user -> is_admin)) {
      return redirect() -> action('StaticController@forbidden');
    }
  }
  private function check_admin($user) {
    if (!$user -> is_admin) {
      return redirect() -> action('StaticController@forbidden');
    }
  }
}
