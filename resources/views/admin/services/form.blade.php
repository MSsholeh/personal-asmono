<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

          {!! Form::myInput('text', 'title', 'Title') !!}

          {!! Form::myInput('text', 'icon', 'Icon') !!}

            <div class="form-group">
                <label for="exampleInputPassword1">List Icon <a href="https://themify.me/themify-icons">Themify</a>, example: <b>ti-heart</b></label>
            </div>

          {!! Form::label('description', 'Description') !!}
          {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 4]) !!}<br>

		</div>
	</div>
</div>

