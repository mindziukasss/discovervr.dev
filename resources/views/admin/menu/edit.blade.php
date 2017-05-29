@extends('base')

@section('content')

    {{--{{dd($menu)}}--}}
    {!! Form::open(['url' => $route])!!}

    <div>
        <h2>Meniu koregavimas:</h2>

        <div>
            {{Form::label('name', 'Pavadinimas')}}
            {{Form::text('name_lt', $menu['name'])}}
            {{Form::label('url', 'Nuoroda puslapio')}}
            {{Form::text('url', $menu['url'])}}

            {{Form::select( 'listParent', [null=>''] + $listParentIdNull )}}

            {{Form::label('sequence', 'Vieta eileje')}}
            {{Form::text('sequence', $menu['sequence'])}}
        </div>
        <div>
            {{Form::label('name', 'Name')}}
            {{Form::text('name_en', $menu['name'])}}
            {{Form::label('url', 'Url')}}
            {{Form::text('url', $menu['url'])}}

            {{Form::select( 'listParent', [null=>''] + $listParentIdNull )}}

            {{Form::label('sequence', 'Sequence')}}
            {{Form::text('sequence', $menu['sequence'])}}
        </div>


        {{Form::submit('Issaugoti')}}

    </div>



    {!! Form::close() !!}

@endsection