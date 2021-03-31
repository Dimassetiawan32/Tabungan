@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <h2>Penarikan</h2>
        </div>
    </div>
    <a href="{{route('transaksi.penarikan.formTarik')}}" class="btn btn-outline-primary btn-sm">Tarik</a>
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
                        <th>Saldo</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tariks as $tarik)
                    <tr>
                        <td>{{$tarik->kode_transaksi}}</td>
                        <td>{{$tarik->nasabah->norek}}</td>
                        <td>{{$tarik->nasabah->nama}}</td>
                        <td>{{$tarik->nasabah->kelas}}</td>
                        <td>RP. {{$tarik->jumlah_tarik}}</td>
                        <td> 
                            <form action="{{route('transaksi.penarikan.delete', $tarik->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('transaksi.penarikan.formEdit', $tarik->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                <button href="" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">
                            Maaf Data Belum Tersedia. <a href="{{route('transaksi.penarikan.formTarik')}}">Tekan Disini Untuk menambahkan</a> 
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $tariks->links() }}
        </div>
    </div>
</div>
@endsection