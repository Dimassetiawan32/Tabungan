<?php

namespace App\Http\Controllers;
use App\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelass = Kelas::all();
        return view('kelas.index', compact('kelass'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'kelas'         => 'required',
            'jurusan'       => 'required',
            'kapasitas'     => 'required',
            'nama_ketlas'   => 'required',
            'nama_walas'    => 'required',
        ]);

        $kelass = Kelas::create([
            'kelas'         => $request->kelas,
            'jurusan'       => $request->jurusan,
            'kapasitas'     => $request->kapasitas,
            'nama_ketlas'   => $request->nama_ketlas,
            'nama_walas'    => $request->nama_walas,
        ]);

        $kelass->save();
        return redirect()->back()->with(['success' => 'Kelas Berhasil Ditambahkan']);
    }

    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $kelas->update($request->all());
        return redirect()->back()->with(['success' => 'Kelas Berhasil Diperbarui']);
    }

    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete($kelas->all());
        return redirect()->back()->with(['success' => 'Kelas Berhasil DiHapus']);
    }
}
