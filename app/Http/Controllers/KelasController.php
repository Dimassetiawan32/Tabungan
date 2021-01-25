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
}
