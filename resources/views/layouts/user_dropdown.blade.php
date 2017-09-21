<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ $user -> name }} <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="{{ action('UserController@home') }}">Home</a></li>
    <li><a href="{{ action('OrderController@index') }}">My Orders</a></li>
    @if ($user -> is_seller || $user -> is_admin)
      <li><a href="{{ action('UserController@item') }}">My Items</a></li>
    @endif
    <li class="divider"></li>
    <li><a href="{{ action('UserController@logout') }}">Logout</a></li>
  </ul>
</li>
