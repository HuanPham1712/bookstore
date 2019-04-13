@@extends("layouts.app")
<!-- {{dd($books)}} -->
@section("content")
    @foreach($books as $book)
    <<table class="table table-hover">
        <tr>
            <td>
                    {{$book->TenSach}}

            </td>
            <td>
                    {{$book->GiaCu}}
                    
            </td>
            <td>
                    {{$book->SoLuong}}
                    
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection