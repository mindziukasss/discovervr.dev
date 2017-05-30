<html lang="en">
<head>
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<title>jQuery UI Datepicker - Default functionality</title>--}}
    {{--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}
    {{--<link rel="stylesheet" href="/resources/demos/style.css">--}}
    {{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
    {{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--}}
    {{--<script>  $( function() {--}}
            {{--$(".datepicker").datepicker({--}}
                {{--dateFormat: 'Y/d/m',--}}
                {{--minDate: 0,--}}
                {{--maxDate: 30--}}
            {{--});--}}
        {{--} );--}}
    {{--</script>--}}
    {!! Form::open(['url' => route('app.orders.create')]) !!}

    {{ Form::select('date', $date, null) }} <br>
        @foreach($rooms as $key => $room)
            {{ Form::checkbox('room[]', $key) }}
            {{$room}}
            @foreach ($time as $hour)
                {{ Form::checkbox($key.'time[]', $hour) }}
                {{$hour}}
            @endforeach
        <label>
        </label><br>
        @endforeach

    {{ Form::submit('Order') }}


