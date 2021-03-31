@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <h2>Setor Tunai</h2>
        </div>
    </div>
    <a href="{{route('transaksi.setor.formSetor')}}" class="btn btn-outline-primary btn-sm">Setor</a>
    <div class="container">
        <div class="row d-flex pt-2">
            @csrf
            <table class="table">
                <thead>
                    <tr>
                        <th>Kode Transaksi</th>
                        <th>No Rek</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Saldo</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($setors as $setor)
                    <tr>
                        <td>{{$setor->kode_transaksi}}</td>
                        <td>{{$setor->nasabah->norek}}</td>
                        <td>{{$setor->nasabah->nama}}</td>
                        <td>{{$setor->nasabah->kelas->kelas}}</td>
                        <td>{{$setor->nasabah->kelas->jurusan}}</td>
                        <td>RP. {{$setor->jumlah_transfer}}</td>
                        <td> 
                            <form action="{{route('transaksi.setor.delete', $setor->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="" class="btn btn-primary btn-sm">Cek Nota</a>
                                <a href="{{route('transaksi.setor.formEdit', $setor->id)}}" class="btn btn-success btn-sm">Edit</a>
                                <button href="" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">
                            Maaf Data Belum Tersedia. <a href="{{route('transaksi.setor.formSetor')}}">Tekan Disini Untuk menambahkan</a> 
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $setors->links() }}
        </div>
    </div>
</div>
@endsection