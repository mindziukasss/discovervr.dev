<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        @foreach($item as $key => $value)

            @if($key != 'translation' && $key != 'category' && $key != 'resource')
            <tr>
                <td>{{$key}}</td>
                <td>
                    {{$value}}
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
                            {{$lang}}
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
                                    {{$lang}}
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