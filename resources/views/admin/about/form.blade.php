<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

            {!! Form::myInput('text', 'title', 'Title') !!}

            <div class="form-group">
                {!! Form::label(null, 'Image') !!}
            <div class="custom-file">
              {!! Form::file('image', array('class' => 'image custom-file-input','id' => 'image')) !!}
              {!! Form::label('image', 'Choose image. . .', array('class'=>'custom-file-label')) !!}
            </div>
            </div>
            <div id="preview-holder" class="row d-none my-2">
              <div class="col-sm-9">
                <div class="card">
                  <div class="card-body">
                      <p><img id="previewimage" style="display:none;"/></p>
                        @if(session('path'))
                            <img src="{{ session('path') }}" />
                        @endif
                  </div>
                </div>
              </div>
                <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                        {!! Form::myInput('text','h', 'Height', array('class' => 'h form-control', 'size'=>7, 'readonly')) !!}
                        {!! Form::myInput('text','w', 'Width', array('class' => 'w form-control', 'size'=>7, 'readonly')) !!}
                        {!! Form::myInput('text','x1', null, array('class' => 'x1', 'hidden'=>true)) !!}
                        {!! Form::myInput('text','y1', null, array('class' => 'y1', 'hidden'=>true)) !!}
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('desc', 'Description') !!}
              {!! Form::textarea('desc', null,['id' => 'desc' ,'class' => 'form-control', 'cols' => '90%']) !!}
            </div>

		</div>
	</div>
</div>

<script src="{{ asset('js/jquery.imgareaselect.min.js') }}"></script>
<script>
    jQuery(function($) {

        var p = $("#previewimage");
        $("body").on("change", ".image", function(){
                if(document.querySelector(".image").files[0] == null){
                  $('#preview-holder').addClass('d-none');
                }else{
                  var imageReader = new FileReader();
                  imageReader.readAsDataURL(document.querySelector(".image").files[0]);
                  $('#preview-holder').removeClass('d-none');
                  imageReader.onload = function (oFREvent) {
                    p.attr('src', oFREvent.target.result).fadeIn();
                  }
                }
        });

        var q = $('#previewimage').imgAreaSelect({
            instance: true, handles: true,
            onSelectEnd: function (img, selection) {
                $('input[name="w"]').val(Math.round(selection.width * (img.naturalWidth / img.width)));
                $('input[name="h"]').val(Math.round(selection.height * (img.naturalHeight / img.height)));
                $('input[name="y1"]').val(Math.round(selection.y1 * (img.naturalHeight / img.height)));
                $('input[name="x1"]').val(Math.round(selection.x1 * (img.naturalWidth / img.width)));
            }
        });

        $(document).ready(function(){
          $('#previewimage').imgAreaSelect({
              onSelectEnd: function (img, selection) {
                $('#w').val(Math.round(selection.width * (img.naturalWidth / img.width)));
                $('#h').val(Math.round(selection.height * (img.naturalHeight / img.height)));
                $('#y1').val(Math.round(selection.y1 * (img.naturalHeight / img.height)));
                $('#x1').val(Math.round(selection.x1 * (img.naturalWidth / img.width)));
              }
            });

        });
    });
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<script>
	$(document).ready(function () {
  		bsCustomFileInput.init()
	})
	</script>

{{-- <script>
    $(document).ready(function() {
        $('#desc').summernote({
            height: 200
        });
    });
</script> --}}
