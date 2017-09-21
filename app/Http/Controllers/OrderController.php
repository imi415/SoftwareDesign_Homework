<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Item;
use App\Order;
use App\OrderItem;

class OrderController extends Controller
{

  public function __construct() {
    $this -> middleware('auth');
  }

  public function index() {
    $user = Auth::user();
    $buyer_orders = Order::where('buyer_id', $user -> id) -> get();
    $buyer_order_items = [];
    foreach ($buyer_orders as $buyer_order) {
      $order_items = OrderItem::where('order_id', $buyer_order -> id) -> get();
      $buyer_order_items.push($order_items);
    }
    $seller_orders =array();
    if ($user -> is_seller) {
      $seller_orders = Order::where('seller_id', $user -> id) -> get();
    }
    return view('order.index', ['user' => $user,
                                'buyer_orders' => $buyer_orders,
                                'seller_orders' => $seller_orders]);
  }

  public function new($id) {
    $user = Auth::user();
    $item = Item::where('id', $id) -> first();
    return view('order.new', ['user' => $user,
                              'item' => $item]);
  }

  public function create(Request $request, $id) {
    $user = Auth::user();
    $item = Item::where('id', $id) -> first();

    $order = new Order;
    $order -> buyer_id = $user -> id;
    $order -> seller_id = $item -> seller;
    $order -> status = 'payment_required';
    $order -> shipping_fee = $item -> default_shipping_fee;
    $order -> tracking_id = 0;
    $order -> save();
    $order_item = new OrderItem;
    $order_item -> order_id = $order -> id;
    $order_item -> name = $item -> name;
    $order_item -> item_id = $item -> id;
    $order_item -> real_price = $item -> price;

    $order_item -> save();
    return redirect() -> action('PaymentController@show', ['id' => $id]);
  }

  public function show($id) {
    $user = Auth::user();
    $order = Order::where('id', $id) -> first();
    if ($user -> id != $order -> buyer_id && $user -> id != $order -> seller_id) {
      return redirect() -> action('StaticController@lost');
    }

    $order_items = OrderItem::where('order_id', $id) -> get();
    return view('order.show', ['user' => $user,
                               'order' => $order,
                               'order_items' => $order_items]);
  }
}
