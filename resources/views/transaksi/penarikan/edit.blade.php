@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('transaksi.penarikan.update', $tarik->id)}}" enctype="multipart/form-data" method="POST">
                    <div class="mb-3">
                        <h5 class="text-muted">Form Tarik Tunai</h5>
                    </div>
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Kode Transaksi</label>
                                    <input type="text" name="kode_transaksi" class="form-control" value="{{$tarik->kode_transaksi}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Nasabah</label>
                                    <select name="nasabah_id" id="nasabah_id" class="form-control">
                                        <option value="">Pilih Nasabah</option>
                                        @foreach($nasabah as $nasabah)
                                            <option value="{{$nasabah->id}}">{{$nasabah->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jumlah Transfer</label>
                                    <input type="number" name="jumlah_tarik" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                        <a href="{{route('transaksi.penarikan.index')}}" class="btn btn-success btn-sm">Back</a>
                        <button type="submit" class="btn btn-primary btn-sm" style="float: right;">Save</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

