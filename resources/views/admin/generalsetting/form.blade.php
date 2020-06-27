<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">

			{!! Form::myInput('text', 'website_name', 'Website Name') !!}

            {!! Form::myInput('text', 'email', 'Email') !!}

            {!! Form::myInput('text', 'phone_number', 'Phone Number') !!}

            {!! Form::myInput('text', 'address', 'Address') !!}

            <img src="{{ url($item->website_logo) }}" width="190px"><br>

            {!! Form::myFile('website_logo', 'Website Logo') !!}

            <img src="{{ url($item->website_favicon) }}" width="40px"><br>

            {!! Form::myFile('website_favicon', 'Website Favicon') !!}

            {!! Form::label('keyword', 'Keyword (SEO)') !!}

            {!! Form::textarea('keyword', null,['id' => 'keyword', 'cols' => '90%']) !!}<br>

            {!! Form::label('metatext', 'Metatext (SEO)') !!}

            {!! Form::textarea('metatext', null,['id' => 'metatext', 'cols' => '90%']) !!}

            {!! Form::myInput('text', 'facebook', 'Link Facebook Account') !!}

            {!! Form::myInput('text', 'twitter', 'Link Twitter Account') !!}

            {!! Form::myInput('text', 'instagram', 'Link Instagram Account') !!}

		</div>
	</div>
</div>
