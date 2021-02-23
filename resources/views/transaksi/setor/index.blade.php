@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <h2>Setor Tunai</h2>
        </div>
    </div>
    <a href="{{route('transaksi.setor.formStore')}}" class="btn btn-outline-primary btn-sm">Setor</a>
    <div class="container">
        <div class="row d-flex pt-2">
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
                        <th>Saldo</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($setors as $setor)
                    <tr>
                        <td>{{$setor->nasabah->kode_nasabah}}</td>
                        <td>{{$setor->nasabah->norek}}</td>
                        <td>{{$setor->nasabah->nama}}</td>
                        <td>{{$setor->nasabah->kelas}}</td>
                        <td>RP. {{$setor->jumlah_transfer}}</td>
                        <td> 
                            <form action="{{route('transaksi.setor.delete', $setor->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('transaksi.setor.formEdit', $setor->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                <button href="" class="btn btn-danger btn-sm">Hapus</button>
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