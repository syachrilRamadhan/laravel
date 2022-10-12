@extends ('layouts.main')

@section ('title', 'HOME')

@section ('content')
<table>
    <h1 style="text-align: center;">TESTING</h1>
    <h2 style="text-align: center;">Welcome ,{{$name}}. Anda adalah {{$role}}</h2>
    @if ($role == 'admin')
    <a style="align-items:center;" href="#">Ke halaman admin</a>
    @endif
</table>
@endsection