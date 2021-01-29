@extends('Layouts.app')

@section('content')  
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-2">
    <h1 class="h2">Home</h1>             
</div>
<div class="card border-0 shadow">
    <div class="card-body bg-warning">
        <h4 class="font-weight-bold">Welcome !</h4>
        <h6>Hey Selamat datang di Aplikasi Tabungan Siswa . ada yang bisa kami bantu?</h6>
    </div>
</div>
<div class="container pt-4">
    <div class="row d-flex pt-4">
        <h1 class="h2">Data Petugas</h1>
    </div>
</div>        
<a href="{{route('home.create')}}" class="btn btn-warning btn-sm">Tambah Petugas</a>
<div class="container">
    <div class="row d-flex pt-4">
    @csrf
    @if(session('success'))
    <div class="d-flex justify-content-center">
        <div class="alert alert-danger">
            {{ session('success')}}
        </div>
    </div>
    @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Petugas</th>
                    <th>Nama</th>
                    <th>Level</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($petugass as $petugas)
                <tr>
                    <td>{{$petugas->kode_petugas}}</td>
                    <td>{{$petugas->nama}}</td>
                    <td>{{$petugas->level}}</td>
                    <td>
                        <form action="{{route('home.delete', $petugas->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('home.formEdit', $petugas->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <button href="" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>        
@endsection

