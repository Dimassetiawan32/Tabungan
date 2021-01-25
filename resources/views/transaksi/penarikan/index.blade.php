@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <h2>Penarikan</h2>
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
                    <tr>
                        <td>NB 000001</td>
                        <td>12345678</td>
                        <td>Melody JKT 29</td>
                        <td>XII - AK</td>
                        <td>089312312</td>
                        <td> <a href="{{route('transaksi.penarikan.formTarik')}}" class="btn btn-outline-primary btn-sm">Tarik</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection