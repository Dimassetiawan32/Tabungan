@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <h2>Data Kelas</h2>
        </div>
    </div>
    <a href="{{route('kelas.create')}}" class="btn btn-warning btn-sm">Tambah Kelas</a>
    <div class="container">
        <div class="row d-flex pt-3">
        @csrf
        @if(session('success'))
            <div class="alert alert-danger">
                {{ session('success')}}
            </div>
        @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Kapasitas</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($kelass as $Kelas)
                    <tr>
                        <td>{{$Kelas->kelas}}</td>
                        <td>{{$Kelas->jurusan}}</td>
                        <td>{{$Kelas->kapasitas}}</td>
                        <td>
                            <form action="{{route('kelas.delete', $Kelas->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('kelas.formEdit', $Kelas->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                <button href="" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">
                            Maaf Data Belum Tersedia. <a href="{{route('kelas.create')}}">Tekan Disini Untuk menambahkan</a> 
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            {{ $kelass->links() }}
        </div>
    </div>
</div>
@endsection
