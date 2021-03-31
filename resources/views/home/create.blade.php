@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('home.save')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                    <div class="mb-3">
                        <h5 class="text-muted">Form Tambah Petugas</h5>
                    </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">level</label>
                                    <input type="text" name="level" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <select name="jenis_kelamin" class="form-control" id="">
                                        <option>Pilih Gender</option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Telepon</label>
                                    <input type="number" name="telp" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-info btn-sm">Save</button>
                        <a href="{{route('home.index')}}" class="btn btn-outline-secondary btn-sm">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

