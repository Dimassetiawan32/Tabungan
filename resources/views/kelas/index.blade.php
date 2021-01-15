@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <h2>Data Kelas</h2>
        </div>
    </div>
    <a href="{{route('kelas.create')}}" class="btn btn-warning">Tambah Kelas</a>
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
                    <tr>
                        <td>XII</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>50</td>
                        <td>
                            <a href="" class="btn btn-info btn-sm">Detail</a>
                            <a href="" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
