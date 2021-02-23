<?php

namespace App\Http\Controllers;
use App\Nasabah;
use App\Tarik;
use Illuminate\Http\Request;

class TarikController extends Controller
{
    public function __construct()
    {
        $this->tarik = new Tarik ();
    }

    public function index()
    {
        $nasabahs = Nasabah::all();
        $tariks = Tarik::all();
        return view('transaksi.penarikan.index', compact('nasabahs','tariks'));
    }

    public function create()
    {
        $nasabahs = Nasabah::all();
        $getKode = $this->tarik->generateCode();
        return view('transaksi.penarikan.create', compact('nasabahs','getKode'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nasabah_id'        => 'required',
            'kode_transaksi'    => 'required',
            'jumlah_tarik'      => 'required',
        ]);

        $setors = Tarik::create([
            'nasabah_id'        => $request->nasabah_id,
            'Kode_transaksi'    => $request->kode_transaksi,
            'jumlah_tarik'      => $request->jumlah_tarik,
        ]);

        $setors->save();
        return redirect()->back()->with(['success' => 'Transaksi Berhasil']);
    }
    public function edit($id)
    {
        $nasabah = Nasabah::all();
        $tarik = tarik::findOrFail($id);
        return view('transaksi.penarikan.edit', compact('nasabah','tarik'));
    }

    public function update(Request $request, $id)
    {
        $tarik = Tarik::find($id);
        $tarik->update($request->all());
        return redirect()->back()->with(['success' => 'Transaksi Berhasil Diperbarui']);
    }

    public function destroy($id)
    {
        $tarik = Tarik::find($id);
        $tarik->delete($tarik->all());
        return redirect()->back()->with(['success' => 'Transaksi Berhasil DiHapus']);
    }
}
