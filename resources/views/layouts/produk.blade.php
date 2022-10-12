@extends ('layouts.main')

@section ('title', 'PRODUK')

@section('content')
<h1 style="text-align: center;">Halaman Produk</h1>
<h5>List Produk</h5>
<div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Brand</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produkList as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->deskripsi}}</td>
                <td>{{$data->harga}}</td>
                <td>{{$data->brand['name']}}</td>
                <td>
                    @foreach($data->type as $item)
                    {{$item->name}} <br>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection