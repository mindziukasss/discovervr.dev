{!! Form::open(['url' => route($route)])!!}

<div>
    <h2>Meniu sukurimas:</h2>
    <div>{{Form::label('name', 'Pavadinimas')}}
    {{Form::text('name')}}
    {{Form::label('url', 'Nuoroda pusapio')}}
    {{Form::text('url')}}
    {{Form::label('sequence', 'Vieta eileje')}}
    {{Form::text('sequence')}}</div>


    {{Form::submit('Issaugoti')}}

</div>



{!! Form::close() !!}