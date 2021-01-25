@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <h2>Data Kelas</h2>
        </div>
    </div>
    <a href="{{route('kelas.create')}}" class="btn btn-warning btn-sm">Tambah Kelas</a>
    <div class="container">
        <div class="row d-flex pt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Kelas</th>
                        <th>Jurusan</th>
                        <th>Kapasitas</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($kelass as $Kelas)
                    <tr>
                        <td>{{$Kelas->kelas}}</td>
                        <td>{{$Kelas->jurusan}}</td>
                        <td>{{$Kelas->kapasitas}}</td>
                        <td>
                            <a href="" class="btn btn-info btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
