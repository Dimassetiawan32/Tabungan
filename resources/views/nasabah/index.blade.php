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
            <table class="table">
                <thead>
                    <tr>
                        <th>Kode Nasabah</th>
                        <th>No Rek</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Telp</th>
                        <th>Nama Orang Tua</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="" class="btn btn-outline-success btn-sm">NB 000001</a>
                        </td>
                        <td>12345678</td>
                        <td>Melody JKT 29</td>
                        <td>XII - AK</td>
                        <td>089312312</td>
                        <td>Rendy Orton</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
