<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

          {!! Form::myInput('text', 'name', 'Name') !!}

          <div class="form-group">
              {!! Form::label('image', 'Image') !!}
              <div class="custom-file">
                {!! Form::file('image', array('class' => 'image custom-file-input','id' => 'image', 'onchange' => 'readURL(this);')) !!}
                {!! Form::label('image', 'Choose image. . .', array('class'=>'custom-file-label')) !!}
              </div><br><br>
              <img id="preview" src="https://via.placeholder.com/300?text=No+Image" width="40%"/>
          </div>

          {!! Form::label('description', 'Description'); !!}
          {!! Form::textarea('description', null, ['id' => 'description', 'class' => 'form-control', 'rows' => 4]) !!}<br>

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
