<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

			{!! Form::myInput('text', 'title', 'Title') !!}

            {!! Form::myInput('text', 'year', 'Year',['pattern' => '\b(19|[2-9][0-9])\d{2}']) !!}

            {!! Form::myInput('text', 'location', 'Location') !!}

            {!! Form::mySelect('status', 'Status', ['on going'=> 'On Going','finished' =>  'Finished'], null, ['class' => 'form-control select2'])

            !!}

            {!! Form::mySelect('category_id', 'Category', $category, null, ['class' => 'form-control select2'])

            !!}

		</div>
	</div>
</div>

<script>
    $(document).ready(function() {
        $('#desc').summernote({
            height: 150
        });
    });
</script>
