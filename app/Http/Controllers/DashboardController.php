<?php

namespace App\Http\Controllers;
use App\Petugas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{

    public function index()
    {
        $petugass = Petugas::paginate(3);
        return view('home.index', compact('petugass'));
    }

    public function create()
    {
        return view("home.create");
    }

    public function store(Request $request)
    {

        $petugass = Petugas::create([
            'nama'          => $request->nama,
            'level'         => $request->level,
            'jabatan'       => $request->jabatan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat'        => $request->alamat,
            'telp'          => $request->telp,
        ]);

        $petugass->save();
        toast('Data Petugas Berhasil Ditambah','success');
        return redirect('dashboard/index');
    }

    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('home.edit', compact('petugas'));
    }

    public function update(Request $request, $id)
    {
        $petugas = Petugas::find($id);
        $petugas->update($request->all());
        toast('Data Petugas Berhasil Diperbarui','success');
        return redirect('dashboard/index');
    }

    public function destroy($id)
    {
        $petugas = Petugas::find($id);
        $petugas->delete($petugas->all());
        toast('Data Petugas Berhasil Dihapus','success');
        return redirect('dashboard/index');
    }
}