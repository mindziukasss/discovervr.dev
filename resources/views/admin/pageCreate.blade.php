<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pages</title>
</head>
<body>
{!! Form::open(
            array(
                'route' => 'app.pages.create',
                'class' => 'form',
                'novalidate' => 'novalidate',
                'files' => true)) !!}

{!! Form::open(['url'=>route('app.pages.create')])!!}

{{Form::label('categories', 'Categories')}}
{{Form::select('categories', $categories)}}

{!! Form::file('image') !!} <br>


{{Form::label('title_lt', 'Title lithuanian')}}
{{ Form::text('title_lt')}}

{{Form::label('slug_lt', 'Slug lithuanian')}}
{{Form::text('slug_lt')}}

{{Form::label('description_short_lt', 'Short Descriptions lithuanian')}}
{{ Form::text('description_short_lt')}}

{{Form::label('description_long_lt', 'Long Descriptions lithuanian')}}
{{ Form::text('description_long_lt')}} <br>


{{Form::label('title_en', 'Title english')}}
{{ Form::text('title_en')}}

{{Form::label('slug_en', 'Slug english')}}
{{Form::text('slug_en')}}

{{Form::label('description_short_en', 'Short Descriptions english')}}
{{ Form::text('description_short_en')}}

{{Form::label('description_long_en', 'Long Descriptions english')}}
{{ Form::text('description_long_en')}}



{{Form::submit('Submit')}}

{!! Form::close() !!}


</body>
</html>