<ul class="nav nav-tabs">
  <li class="active"><a href="#index" data-toggle="tab" aria-expanded="true">Index</a></li>
  <li class=""><a href="#description" data-toggle="tab" aria-expanded="false">Description</a></li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="index">
    <div class="panel panel-default">
  <div class="panel-heading">Basic Information</div>
  <div class="panel-body">
    <img src="/{{ $item -> image_url }}" alt="No pic you say..." class="col-lg-12">
    <h3 class="col-lg-4 col-lg-offset-4">{{ $item -> name }} - ${{ $item -> price }}</h3>
  </div>
</div>
  </div>
  <div class="tab-pane fade" id="dexsription">
    <p>{{ $item -> description }}</p>
  </div>
</div>
