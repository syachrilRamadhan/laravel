@extends ('layouts.main')
@section ('title', 'BRAND')

@section('content')
<h1 style="text-align: center;">Halaman Brand</h1>
<h5>List Brand</h5>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Produk</th>
        </tr>
    </thead>
    <tbody>
        @foreach($brandList as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->name}}</td>
            <!-- <td>{{$data->produk}}</td> -->
            <td>
                @foreach($data->produk as $produk)
                {{$produk['name']}}
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection