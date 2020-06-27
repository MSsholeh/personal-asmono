<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">


            {!! Form::myInput('text', 'title', 'Title' , ['required' => 'required']) !!}
            <div class="form-group">
              <label for="description">Description</label>
              {!! Form::textarea('description', null,['required' => 'required','id' => 'description', 'rows' => 5, 'class' => 'form-control w-100']) !!}
            </div>
		</div>
	</div>
</div>

<script>
    $(document).ready(function() {
      $('#message').summernote();
    });
</script>
