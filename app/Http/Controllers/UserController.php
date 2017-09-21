<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

  public function __construct() {
    $this -> middleware('auth');
  }

  public function home() {
    $user = Auth::user();
    return view('user.home', ['user' => $user]);
  }


  public function logout() {
    $user = Auth::user();
    return view('user.logout', ['user' => $user]);
  }
}
