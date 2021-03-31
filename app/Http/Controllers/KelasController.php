<?php

namespace App\Http\Controllers;
use App\Kelas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KelasController extends Controller
{
    public function index()
    {
        $kelass = Kelas::paginate(3);
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
        toast('Kelas Berhasil Ditambahkan','success');
        return redirect('kelas/index');
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
        toast('Kelas Berhasil Diperbarui','success');
        return redirect('kelas/index');
    }

    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete($kelas->all());
        toast('Kelas Berhasil Dihapus','success');
        return redirect('kelas/index');
    }
}
