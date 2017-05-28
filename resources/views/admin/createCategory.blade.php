{!! Form::open(['url' => route('app.categories.create')]) !!}

{{ Form::label('name_lt', 'Insert category name lithuanian: ') }}
{{ Form::text('name_lt') }}

{{ Form::label('name_en', 'Insert category name english: ') }}
{{ Form::text('name_en') }}


{{ Form::submit('Click Me!') }}
{!! Form::close() !!}