@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('nasabah.update', $nasabah->id)}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                    <div class="mb-3">
                        <h5 class="text-muted">Form Tambah Nasabah</h5>
                    </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Kode Nasabah</label>
                                    <input type="text" name="kode_nasabah" class="form-control" value="{{$nasabah->kode_nasabah}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nomor Rekening</label>
                                    <input type="text" name="norek" class="form-control" value="{{$nasabah->norek}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="{{$nasabah->nama}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">kelas</label>
                                    <input type="text" name="kelas" class="form-control" value="{{$nasabah->kelas}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{$nasabah->alamat}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tempat Tanggal Lahir</label>
                                    <input type="text" name="ttl" class="form-control" value="{{$nasabah->ttl}}" id="">
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
                                    <label for="">Telepon</label>
                                    <input type="number" name="telp" class="form-control" value="{{$nasabah->telp}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Orang Tua</label>
                                    <input type="text" name="nama_ortu" class="form-control" value="{{$nasabah->nama_ortu}}" id="">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-info">Save</button>
                        <a href="{{route('nasabah.index')}}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

