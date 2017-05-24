Meniu yra sie:

@foreach($menu as $item)
    <div> Pavadinimas: {{$item['name']}} </div>
    <div>Url: {{$item['url']}}</div>
    <div>Pozicija: {{$item['sequence']}}</div>

    ////////////////
    @endforeach