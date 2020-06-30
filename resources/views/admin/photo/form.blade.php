<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

          <div class="form-group">
              {!! Form::label('image', 'Image') !!}
              <div class="custom-file">
                {!! Form::file('image', array('class' => 'image custom-file-input','id' => 'image', 'onchange' => 'readURL(this);')) !!}
                {!! Form::label('image', 'Choose image. . .', array('class'=>'custom-file-label')) !!}
              </div><br><br>
              <img id="preview" src="https://via.placeholder.com/300?text=No+Image" width="60%"/>
          </div>

          {!! Form::label('description', 'Caption'); !!}
          {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 4]) !!}<br>

          {!! Form::label('status', 'Status') !!}
            <div class="funkyradio">
                <div class="row">
                    <div class="col-6">
                        <div class="funkyradio-success">
                            <input type="radio" name="status" id="publish" value="1" checked/>
                            <label for="publish">Publish</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="funkyradio-danger">
                            <input type="radio" name="status" id="draf" value="0" />
                            <label for="draf">Draf</label>
                        </div>
                    </div>
                </div>
            </div>

          {{ Form::hidden('type', 'photo') }}

		</div>
	</div>
</div>

@section('js')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script>
        $(document).ready(function () {
            bsCustomFileInput.init()
        })
	</script>
    <script>
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
