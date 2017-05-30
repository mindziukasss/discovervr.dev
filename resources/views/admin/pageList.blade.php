<table>
@foreach($list as $record)
    <tr id="{{$record['id']}}">
        @foreach($record as $key => $value)
            @if(!is_array($value))
        <td>
            {{$value}}
        </td>
            @elseif ($key == 'translation')
                    <td>
                        <ul>
                    @foreach ($value as $translation)
                        <li>
                            {{$translation['pivot']['title']}}
                        </li>
                    @endforeach
                        </ul>
                    </td>
            @endif
        @endforeach
            <td><a href="{{ route($edit,$record['id']) }}">
                    <button type="button" class="btn btn-primary">Edit</button>
                </a>
            </td>

            <td><a href="{{ route($show, $record['id']) }}">
                    <button type="button" class="btn btn-success">Show</button>
                </a>
            </td>
            <td>
                <button onclick="deleteItem( '{{ route($delete, $record['id']) }}' )"
                        class="btn btn-danger">Delete
                </button>
            </td>
    </tr>
@endforeach
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function deleteItem(route) {
        $.ajax({
            url: route,
            type: 'DELETE',
            dataType: 'json',
            success: function (response) {
                $('#' + response.id).remove();
            },
            error: function () {
                alert('ERROR')
            }
        });
    }
</script>

<aside class="col-md-02"></aside>