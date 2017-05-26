@extends('admin.menu.menu')

@section('content')
    {!! Form::open(['url' => $route])!!}

    <div>
        <h2>Meniu koregavimas:</h2>
        <div>{{Form::label('name', 'Pavadinimas')}}
            {{Form::text('name', $menu['name'])}}
            {{Form::label('url', 'Nuoroda puslapio')}}
            {{Form::text('url', $menu['url'])}}
            {{Form::select( 'listParent', [null=>''] + $listParentIdNull )}}

            {{Form::label('sequence', 'Vieta eileje')}}
            {{Form::text('sequence', $menu['sequence'])}}</div>


        {{Form::submit('Issaugoti')}}

    </div>



    {!! Form::close() !!}

@endsection