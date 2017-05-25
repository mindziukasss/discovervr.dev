
    {!! Form::open(['url' => route('app.orders.create')]) !!}

    @foreach($rooms as $key => $room)
        {{ Form::label('Time:', null, ['class' => 'control-label']) }}
        {{ Form::text('time[]') }}
        <label>
            {{ Form::checkbox('rooms[]', $key) }}
            {{$room}}
        </label><br>
    @endforeach

    {{ Form::submit('Order') }}
