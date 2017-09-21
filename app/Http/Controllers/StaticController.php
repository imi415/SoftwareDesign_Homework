<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
  public function index() {
    return view('static.index');
  }

  public function about() {
    return view('static.about');
  }

  public function forbidden() {
    return view('static.forbidden');
  }

  public function lost() {
    return view('static.lost');
  }
}
