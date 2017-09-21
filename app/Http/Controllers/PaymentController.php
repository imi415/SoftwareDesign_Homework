<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Order;
use App\OrderItem;

class PaymentController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }

  public function show($id) {
    $user = Auth::user();

    $order = Order::where('id', $id) -> first();
    return view('payment.view', ['order' => $order]);
  }

  public function pay($id) {
    $user = Auth::user();

    $order = Order::where('id', $id) -> first();
    if ($order -> status == 'payment_required') {
      $order -> status = 'processing';
      $order -> save();
      $items = OrderItem::where('order_id', $order -> id) -> get();
      foreach($items as $item) {
        $item -> available_amount = $item -> amount - 1;
        $item -> save();
      }
    }
    return redirect() -> action('OrderController@show', ['id' => $id]);
  }
}
