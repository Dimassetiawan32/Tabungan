<?php

namespace App\Http\Controllers;
use App\User;
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
        return view("nasabah.create", compact('getKode'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'user_id'       => 'required',
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

        $petugass = Petugas::create([
            'user_id'       => $request->auth()->user()->id,
            'Kode_nasabah'  => $request->kode_nasabah,
            'nama'          => $request->nama,
            'kelas'         => $request->kelA,
            'alamat'        => $request->alamat,
            'ttl'           => $request->ttl,
            'jenis_kelamin' => $request->jenis_kelamin,
            'telp'          => $request->telp,
            'nama_ortu'     => $request->nama_ortu,
        ]);

        $nasabahs->save();
        return redirect()->back()->with(['success' => 'Nasabah Berhasil Ditambahkan']);
    }
}
