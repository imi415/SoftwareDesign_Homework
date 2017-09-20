<form class="form-horizontal" enctype="multipart/form-data" action="{{ $form_url }}" method="{{ $form_method }}">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <div class="row col-lg-10 col-lg-offset-1">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img id="blah" src="@isset($item -> image_url) /{{ $item -> image_url }}@endisset" alt="No Image" />
            <div class="caption">
              <input class="btn" type='file' name="image" id="imgInp"/>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" value="{{ $item -> name or '' }}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPrice" class="col-lg-2 control-label">Price</label>
      <div class="col-lg-10 input-group">
        <span class="input-group-addon" id="sizing-addon2">$</span>
        <input type="number" step="0.01" class="form-control" id="inputPrice" name="price" placeholder="0.00" value="{{ $item -> price or '' }}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAmount" class="col-lg-2 control-label">Qty.</label>
      <div class="col-lg-10">
        <input type="number" class="form-control" id="inputAmount" name="available_amount" placeholder="0" value="{{ $item -> available_amount or '' }}">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="is_available"@isset($item -> is_available) checked @endisset> Available now
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Description</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea" name="description">{{ $item -> description or '' }}</textarea>
        <span class="help-block">Here goes a description.</span>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        {{ csrf_field() }}
        {{ $form_hidden_put }}
      </div>
    </div>
  </fieldset>
  <script>
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imgInp").change(function(){
    readURL(this);
  });
  </script>
</form>
