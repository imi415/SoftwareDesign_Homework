<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaticController extends Controller
{
  public function index() {
    $user = Auth::user();
    return view('static.index', ['user' => $user]);
  }

  public function about() {
    $user = Auth::user();
    return view('static.about', ['user' => $user]);
  }

  public function forbidden() {
    $user = Auth::user();
    return view('static.forbidden', ['user' => $user]);
  }

  public function lost() {
    $user = Auth::user();
    return view('static.lost', ['user' => $user]);
  }
}
