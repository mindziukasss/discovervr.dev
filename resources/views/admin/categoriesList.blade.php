
    <div class="container">
        <table class="table table-bordered">
            @foreach($list as $key => $record)
                <tr id="{{$record['id']}}">
                    @foreach($record as $key => $value)

                        <td>
                            @if(!is_array($value))
                                {{$value}}
                            @else
                                <ul>
                                    @foreach ($value as $translation)
                                        <li>
                                            {{$translation['pivot']['name']}}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </td>
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

            </tbody>
        </table>
    </div>

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