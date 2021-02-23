<?php

namespace App\Http\Controllers;

use App\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    public function __construct()
    {
        $this->nasabah = new Nasabah ();
    }

    public function index()
    {
        
        $nasabahs = Nasabah::all();
        return view('nasabah.index', compact('nasabahs'));
    }

    public function create()
    {
        
        $getKode = $this->nasabah->generateCode();
        return view('nasabah.create', compact('getKode'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_nasabah'  => 'required',
            'norek'         => 'required',
            'nama'          => 'required',
            'kelas'         => 'required',
            'alamat'        => 'required',
            'ttl'           => 'required',
            'jenis_kelamin' => 'required',
            'telp'          => 'required',
            'nama_ortu'     => 'required',
        ]);

        $nasabahs = Nasabah::create([
            'Kode_nasabah'  => $request->kode_nasabah,
            'norek'         => $request->norek,
            'nama'          => $request->nama,
            'kelas'         => $request->kelas,
            'alamat'        => $request->alamat,
            'ttl'           => $request->ttl,
            'jenis_kelamin' => $request->jenis_kelamin,
            'telp'          => $request->telp,
            'nama_ortu'     => $request->nama_ortu,
        ]);

        $nasabahs->save();
        return redirect()->back()->with(['success' => 'Nasabah Berhasil Ditambahkan']);
    }

    public function edit($id)
    {
       
        $nasabah = Nasabah::findOrFail($id);
        return view('nasabah.edit', compact('nasabah'));
    }

    public function update(Request $request, $id)
    {
        $nasabah = Nasabah::find($id);
        $nasabah->update($request->all());
        return redirect()->back()->with(['success' => 'Nasabah Berhasil Diperbarui']);
    }

    public function destroy($id)
    {
        $nasabah = Nasabah::find($id);
        $nasabah->delete($nasabah->all());
        return redirect()->back()->with(['success' => 'Nasabah Berhasil DiHapus']);
    }
}
