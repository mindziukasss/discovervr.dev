@extends('base')

@section('content')

    {!! Form::open(['url' => route($route)])!!}

    <div>
        <h2>Meniu sukurimas:</h2>


        <div>
            {{Form::label('name', 'Pavadinimas')}}
            {{Form::text('name_lt',null, array('maxlength' => '255'))}}

            {{Form::label('url', 'Nuoroda puslapio')}}
            {{Form::text('url',null, array('maxlength' => '255'))}}

            {{Form::select( 'listParent', [null=>''] + $listParentIdNull )}}

            {{Form::label('sequence', 'Vieta eileje')}}
            {{Form::text('sequence',null, array('maxlength' => '1'))}}
        </div>

        <div>
            {{Form::label('name', 'Name')}}
            {{Form::text('name_en',null, array('maxlength' => '255'))}}

            {{Form::label('url', 'Url')}}
            {{Form::text('url',null, array('maxlength' => '255'))}}

            {{Form::select( 'listParent', [null=>''] + $listParentIdNull )}}

            {{Form::label('sequence', 'Sequence')}}
            {{Form::text('sequence',null, array('maxlength' => '1'))}}
        </div>


        {{Form::submit('Issaugoti')}}


    </div>

    {!! Form::close() !!}

@endsection
