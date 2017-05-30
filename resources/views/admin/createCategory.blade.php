@include('style')
{!! Form::open(['url' => route('app.categories.create')]) !!}
<div>
    <h2> Create new category </h2>

    <table class="table table-condensed">
            {{ Form::label('name_lt', 'Insert category name lithuanian : ') }}
            {{ Form::text('name_lt') }}
            <br/>
            {{ Form::label('name_en', 'Insert category name english : ') }}
            {{ Form::text('name_en') }}
        </table>




    {{ Form::submit('Click Me!') }}


</div>

{!! Form::close() !!}