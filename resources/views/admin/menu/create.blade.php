@extends('admin.menu.menu')

@section('content')

    {!! Form::open(['url' => route($route)])!!}

    <div>
        <h2>Meniu sukurimas:</h2>


        <div>{{Form::label('name', 'Pavadinimas')}}
            {{Form::text('name',null, array('required' => '', 'maxlength' => '255'))}}

            {{Form::label('url', 'Nuoroda puslapio')}}
            {{Form::text('url',null, array('required' => '', 'minlength' => '5', 'maxlength' => '255'))}}
            {{--//TODO listParent  fixed --}}
            {{Form::select( 'listParent', [null=>''] + $listParentIdNull )}}

            {{Form::label('sequence', 'Vieta eileje')}}
            {{Form::text('sequence',null, array('required' => '', 'maxlength' => '1'))}}
        </div>
            {{Form::submit('Issaugoti')}}


    </div>

    {!! Form::close() !!}

@endsection
