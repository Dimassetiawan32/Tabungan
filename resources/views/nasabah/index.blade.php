@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <h2>Data Nasabah</h2>
        </div>
    </div>
    <a href="" class="btn btn-warning">Aktif</a>
    <a href="" class="btn btn-outline-warning">Non aktif</a>
    <a href="{{route('nasabah.create')}}" class="btn btn-warning" style="float: right;">Tambah Nasabah</a>
    <div class="container">
        <div class="row d-flex pt-3">
            @csrf
            @if(session('success'))
                <div class="alert alert-danger">
                    {{ session('success')}}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>Kode Nasabah</th>
                        <th>No Rek</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Telp</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($nasabahs as $nasabah)
                    <tr>
                        <td>
                            <a href="{{route('nasabah.formEdit', $nasabah->id)}}"  class="btn btn-outline-success btn-sm">{{$nasabah->kode_nasabah}}</a>
                        </td>
                        <td>{{$nasabah->norek}}</td>
                        <td>{{$nasabah->nama}}</td>
                        <td>{{$nasabah->kelas}}</td>
                        <td>{{$nasabah->telp}}</td>
                        <td> 
                        <form action="{{route('nasabah.delete', $nasabah->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm" href="">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
