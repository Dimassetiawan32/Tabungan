<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Nasabah;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class NasabahController extends Controller
{
    public function index()
    {
        
        $kelass = Kelas::paginate(3);
        $nasabahs = Nasabah::paginate(3);
        return view('nasabah.index', compact('nasabahs','kelass'));
    }

    public function create()
    {
        $kelass = Kelas::all();
        return view('nasabah.create', compact('kelass'));
    }

    public function store(Request $request)
    {
        $nasabahs = Nasabah::create([
            'norek'         => $request->norek,
            'nama'          => $request->nama,
            'kelas_id'      => $request->kelas_id,
            'alamat'        => $request->alamat,
            'ttl'           => $request->ttl,
            'jenis_kelamin' => $request->jenis_kelamin,
            'telp'          => $request->telp,
            'nama_ortu'     => $request->nama_ortu,
        ]);

        $nasabahs->save();
        toast('Nasabah Berhasil Ditambahkan','success');
        return redirect('nasabah/index');
    }

    public function edit($id)
    {
        $kelas = Kelas::all();
        $nasabah = Nasabah::findOrFail($id);
        return view('nasabah.edit', compact('nasabah'));
    }

    public function update(Request $request, $id)
    {
        $nasabah = Nasabah::find($id);
        $nasabah->update($request->all());
        toast('Nasabah Berhasil Diperbarui','success');
        return redirect('nasabah/index');
    }

    public function destroy($id)
    {
        $nasabah = Nasabah::find($id);
        $nasabah->delete($nasabah->all());
        toast('Nasabah Berhasil Dihapus','success');
        return redirect('nasabah/index');
    }
}
