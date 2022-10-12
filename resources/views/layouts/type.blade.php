@extends ('layouts.main')

@section ('title', 'TYPE')


@section('content')
<h1 style="text-align: center;">Halaman Type</h1>
<h5>Type List</h5>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Produk</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($typeList as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->name}}</td>
            <td>
                @foreach($data->produk as $item)
                - {{$item->name}} <br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('content')