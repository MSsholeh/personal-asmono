<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

			{!! Form::myInput('text', 'about_name', 'Name') !!}

            {!! Form::myInput('text', 'about_caption', 'Caption') !!}

            <img id="preview-photo" src="{{ asset($item->about_photo) }}" width="60%"><br>

            <div class="form-group">
                  {!! Form::label('about_photo', 'Photo Banner') !!}
                  <div class="custom-file">
                    {!! Form::file('about_photo', array('class' => 'image custom-file-input','id' => 'about_photo', 'onchange' => 'photo(this);')) !!}
                    {!! Form::label('about_photo', 'Choose image. . .', array('class'=>'custom-file-label')) !!}
                  </div><br><br>
            </div>

            {!! Form::label('about_short_description', 'About Me') !!}
            {!! Form::textarea('about_short_description', null,['id' => 'description','rows' => 4, 'class'=>'form-control']) !!}<br>

            {!! Form::myInput('number', 'year_experience', 'Year of Experience') !!}

            <br><hr><br>

            {!! Form::myInput('text', 'about_title', 'Tile') !!}

            <img id="preview-image" src="{{ asset($item->about_image) }}" width="60%"><br>

            <div class="form-group">
                  {!! Form::label('about_image', 'Image') !!}
                  <div class="custom-file">
                    {!! Form::file('about_image', array('class' => 'image custom-file-input','id' => 'about_image', 'onchange' => 'image(this);')) !!}
                    {!! Form::label('about_image', 'Choose image. . .', array('class'=>'custom-file-label')) !!}
                  </div><br>
            </div>

            {!! Form::label('about_description', 'Description') !!}
            {!! Form::textarea('about_description', null, ['id' => 'about_description', 'class' => 'form-control', 'rows' => 4]) !!}<br>

            <br><hr><br>

            {!! Form::myInput('text', 'email', 'Email') !!}

            {!! Form::label('address', 'Address') !!}
            {!! Form::textarea('address', null,['rows' => 4, 'class'=>'form-control']) !!}<br>


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
         function photo(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview-photo')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function image(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview-image')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
      $('#about_description').summernote({
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
@endsection
