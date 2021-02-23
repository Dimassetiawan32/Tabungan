<?php

namespace App\Http\Controllers;
use App\Nasabah;
use App\Setor;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function __construct()
    {
        $this->setor = new Setor ();
    }

    public function index()
    {
        $nasabahs = Nasabah::all();
        $setors = Setor::all();
        return view('transaksi.setor.index', compact('nasabahs','setors'));
    }

    public function create()
    {
        $nasabahs = Nasabah::all();
        $getKode = $this->setor->generateCode();
        return view('transaksi.setor.create', compact('nasabahs','getKode'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nasabah_id'        => 'required',
            'kode_transaksi'    => 'required',
            'jumlah_transfer'   => 'required',
        ]);

        $setors = Setor::create([
            'nasabah_id'        => $request->nasabah_id,
            'Kode_transaksi'    => $request->kode_transaksi,
            'jumlah_transfer'   => $request->jumlah_transfer,
        ]);

        $setors->save();
        return redirect()->back()->with(['success' => 'Transaksi Berhasil']);
    }

    public function edit($id)
    {
        $nasabah = Nasabah::all();
        $setor = Setor::findOrFail($id);
        return view('transaksi.setor.edit', compact('nasabah','setor'));
    }

    public function update(Request $request, $id)
    {
        $setor = Setor::find($id);
        $setor->update($request->all());
        return redirect()->back()->with(['success' => 'Transaksi Berhasil Diperbarui']);
    }

    public function destroy($id)
    {
        $setor = Setor::find($id);
        $setor->delete($setor->all());
        return redirect()->back()->with(['success' => 'Transaksi Berhasil DiHapus']);
    }
}
