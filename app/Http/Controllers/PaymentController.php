<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Order;
use App\OrderItem;
use App\Item;

class PaymentController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }

  public function show($id) {
    $user = Auth::user();

    $order = Order::where('id', $id) -> first();
    $items = OrderItem::where('order_id', $id) -> get();
    $price = 0;
    foreach($items as $item) {
      $price += $item -> real_price;
    }
    return view('payment.view', ['user' => $user, 'order' => $order, 'price' => $price]);
  }

  public function pay($id) {
    $user = Auth::user();

    $order = Order::where('id', $id) -> first();
    if ($order -> status == 'payment_required') {
      $order -> status = 'processing';
      $order -> save();
      $order_items = OrderItem::where('order_id', $order -> id) -> get();
      foreach($order_items as $order_item) {
        $item = Item::where('id', $order_item -> item_id) -> first();
        $item -> available_amount = $item -> available_amount - 1;
        $item -> save();
      }
    }
    return redirect() -> action('OrderController@show', ['id' => $id]);
  }
}
