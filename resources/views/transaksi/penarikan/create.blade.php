@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="">
                    <div class="mb-3">
                        <h5 class="text-muted">Form Penarikan</h5>
                    </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Kode Transaksi</label>
                                    <input type="text" name="" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Kode Nasabah</label>
                                    <input type="text" name="" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Nasabah</label>
                                    <input type="text" name="" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">TTL</label>
                                    <input type="text" name="" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Telepon</label>
                                    <input type="number" name="" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Saldo</label>
                                    <input type="text" name="" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jumlah Tarik</label>
                                    <input type="number" name="" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-success btn-sm" style="float: right;">Tarik</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

