<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

          {!! Form::myInput('text', 'title', 'Title') !!}

          {!! Form::label('link', 'Link Embed Podcast'); !!}
          {!! Form::textarea('link', null, ['id' => 'link', 'class' => 'form-control', 'rows' => 3]) !!}<br>

          {!! Form::label('description', 'Description'); !!}
          {!! Form::textarea('description', null, ['id' => 'description', 'class' => 'form-control', 'rows' => 4]) !!}<br>

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

          {{ Form::hidden('type', 'podcast') }}

		</div>
	</div>
</div>

@section('js')
    <script>
      $('#description').summernote({
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
