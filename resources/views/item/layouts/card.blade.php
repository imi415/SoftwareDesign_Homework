<div class="panel panel-default col-lg-4">
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-12">
        <a href="{{ action('ItemController@show', $item -> id) }}" class="thumbnail">
          <img src="/{{ $item -> image_url }}" alt="No pic you say...">
        </a>
        <div class="caption">
          <h3>{{ $item -> name }}</h3>
          <p>${{ $item -> price }}</p>
          <p><a href="{{ action('OrderController@new', ['id' => $item -> id]) }}" class="btn btn-primary" role="button">Purchase now</a> <a href="#" class="btn btn-default" role="button">Add to cart</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
