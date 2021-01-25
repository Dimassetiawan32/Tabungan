<?php

namespace App\Http\Controllers;
use App\Petugas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->petugas = new Petugas ();
    }

    public function index()
    {
        $petugass = Petugas::all();
        return view('home.index', compact('petugass'));
    }

    public function create()
    {
        $getKode = $this->petugas->generateCode();
        return view("home.create", compact('getKode'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_petugas'  => 'required',
            'nama'          => 'required',
            'level'         => 'required',
            'jabatan'       => 'required',
            'jenis_kelamin' => 'required',
            'alamat'        => 'required',
            'telp'          => 'required',
        ]);

        $petugass = Petugas::create([
            'Kode_petugas'  => $request->kode_petugas,
            'nama'          => $request->nama,
            'level'         => $request->level,
            'jabatan'       => $request->jabatan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat'        => $request->alamat,
            'telp'          => $request->telp,
        ]);

        $petugass->save();
        return redirect()->back()->with(['success' => 'Petugas Berhasil Ditambahkan']);
    }
}