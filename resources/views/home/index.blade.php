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
                <div class="row d-flex pt-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1234567</th>
                                <th>Rachmat Ababil</th>
                                <th>Admin</th>
                                <th>
                                    <a href="" class="btn btn-primary btn-sm">Detail</a>
                                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>        
@endsection

