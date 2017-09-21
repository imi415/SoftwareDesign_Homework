<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ $user -> name }} <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="{{ action('UserController@home') }}">Home</a></li>
    <li><a href="{{ action('OrderController@index') }}">My Orders</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
    <li class="divider"></li>
    <li><a href="{{ action('UserController@logout') }}">Logout</a></li>
  </ul>
</li>
