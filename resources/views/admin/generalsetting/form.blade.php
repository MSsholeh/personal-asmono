<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

			{!! Form::myInput('text', 'website_name', 'Website Name') !!}

            <img id="preview-logo" src="{{ url($item->website_logo) }}" width="190px" height="40px"><br>

            <div class="form-group">
                  {!! Form::label('website_logo', 'Website Logo') !!}
                  <div class="custom-file">
                    {!! Form::file('website_logo', array('class' => 'image custom-file-input','id' => 'website_logo', 'onchange' => 'logo(this);')) !!}
                    {!! Form::label('website_logo', 'Choose image. . .', array('class'=>'custom-file-label')) !!}
                  </div><br><br>
            </div>

            <img id="preview-favicon" src="{{ url($item->website_favicon) }}" width="40px" height="40px"><br>

            <div class="form-group">
                  {!! Form::label('website_favicon', 'Website favicon') !!}
                  <div class="custom-file">
                    {!! Form::file('website_favicon', array('class' => 'image custom-file-input','id' => 'website_favicon', 'onchange' => 'favicon(this);')) !!}
                    {!! Form::label('website_favicon', 'Choose image. . .', array('class'=>'custom-file-label')) !!}
                  </div><br><br>
            </div>

            {!! Form::label('keyword', 'Keyword (SEO)') !!}

            {!! Form::textarea('keyword', null,['id' => 'keyword', 'rows' => 4, 'cols' => '90%']) !!}<br><br>

            {!! Form::label('metatext', 'Metatext (SEO)') !!}

            {!! Form::textarea('metatext', null,['id' => 'metatext', 'rows' => 4, 'cols' => '90%']) !!}<br><br>

            {!! Form::myInput('text', 'facebook', 'Link Facebook Account') !!}

            {!! Form::myInput('text', 'Linkedin', 'Link Linkedin Account') !!}

            {!! Form::myInput('text', 'instagram', 'Link Instagram Account') !!}

		</div>
	</div>
</div>

@section('js')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script>
        $(document).ready(function () {
            bsCustomFileInput.init()
        })
	</script>
    <script>
         function logo(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview-logo')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function favicon(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview-favicon')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
