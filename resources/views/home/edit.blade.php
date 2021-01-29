@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('home.update', $petugas->id)}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                    <div class="mb-3">
                        <h5 class="text-muted">Form Tambah Petugas</h5>
                    </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Kode Petugas</label>
                                    <input type="text" name="kode_petugas" class="form-control"  value="{{$petugas->kode_petugas}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="{{$petugas->nama}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">level</label>
                                    <input type="text" name="level" class="form-control" value="{{$petugas->level}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" value="{{$petugas->jabatan}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <select name="jenis_kelamin" class="form-control" id="">
                                        <option>{{$petugas->jenis_kelamin}}</option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{$petugas->alamat}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Telepon</label>
                                    <input type="number" name="telp" class="form-control" value="{{$petugas->telp}}" id="">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-info">Save</button>
                        <a href="{{route('home.index')}}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

