@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <h2>Setor Tunai</h2>
        </div>
    </div>
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
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($nasabahs as $nasabah)
                    <tr>
                        <td>{{$nasabah->kode_nasabah}}</td>
                        <td>{{$nasabah->norek}}</td>
                        <td>{{$nasabah->nama}}</td>
                        <td>{{$nasabah->kelas}}</td>
                        <td>{{$nasabah->telp}}</td>
                        <td> <a href="{{route('transaksi.setor.formStore')}}" class="btn btn-outline-primary btn-sm">Setor</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection