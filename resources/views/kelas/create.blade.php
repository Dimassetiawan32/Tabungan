@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('kelas.save')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                    <div class="mb-3">
                        <h5 class="text-muted">Form Tambah Kelas</h5>
                    </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <input type="text" name="kelas" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Kapasitas</label>
                                    <input type="text" name="kapasitas" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Ketua Kelas</label>
                                    <input type="text" name="nama_ketlas" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Wali Kelas</label>
                                    <input type="text" name="nama_walas" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-info">Save</button>
                        <a href="{{route('kelas.index')}}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

