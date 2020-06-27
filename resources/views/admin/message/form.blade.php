<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

			{!! Form::myInput('text', 'name', 'Name') !!}

            {!! Form::myInput('text', 'email', 'Email') !!}

            {!! Form::myInput('text', 'phone', 'Phone') !!}

            {!! Form::myInput('text', 'subject', 'Subject') !!}

            {!! Form::label('message', 'Message') !!}

            {!! Form::textarea('message', null,['id' => 'message', 'rows' => 5, 'cols' => '90%']) !!}

		</div>
	</div>
</div>

<script>
    $(document).ready(function() {
      $('#message').summernote();
    });
</script>
