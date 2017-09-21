<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use \App\Item;

class UserController extends Controller
{

  public function __construct() {
    $this -> middleware('auth');
  }

  public function home() {
    $user = Auth::user();
    return view('user.home', ['user' => $user]);
  }

  public function item() {
    $user = Auth::user();
    $items = Item::where('seller', $user -> id) -> get();
    return view('user.item', ['user' => $user, 'items' => $items]);
  }

  public function logout() {
    $user = Auth::user();
    return view('user.logout', ['user' => $user]);
  }
}
