<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        {!! Form::open(['url'=>route('app.pages.edit', $id)])!!}
        @foreach($item as $key => $value)
            @if($key != 'count' && $key != 'id' && $key != 'translation' && $key != 'category' && $key != 'resource'
            && $key != 'created_at' && $key != 'updated_at' && $key != 'deleted_at' && $key != 'category_id')
                <tr>
                    <td>{{$key}}</td>
                    <td>
                    {{ Form::text($key, $value)}}
                    <td>
                </tr>
            @elseif ($key == 'translation')
                @foreach ($value as $key => $translation)
                    @foreach ($translation['pivot'] as $key => $lang)
                        @if($key != 'page_id' && $key != 'language_code')
                            <tr>
                                <td>
                                    {{$key . ' ' . $translation['pivot']['language_code']}}
                                </td>
                                <td>
                                    {{ Form::text($key  . '_' . $translation['pivot']['language_code'], $lang)}}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
            @elseif ($key == 'category')
                @foreach ($value['translation'] as $key => $translation)
                    @foreach ($translation['pivot'] as $key => $lang)
                        @if($key != 'category_id' && $key != 'language_code')
                            <tr>
                                <td>
                                    {{'Category ' . $key . ' ' . $translation['pivot']['language_code']}}
                                </td>
                                <td>
                                    {{ Form::text('category_' . $key . '_' . $translation['pivot']['language_code'], $lang)}}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
            @elseif($key == 'resource')
                <img src="{{asset($value['path'])}}">
            @endif

        @endforeach
    </table>
</div>