<?php

namespace App\Http\Controllers;
use App\Nasabah;
use App\Tarik;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TarikController extends Controller
{
    public function index()
    {
        $nasabahs = Nasabah::paginate(3);
        $tariks = Tarik::paginate(3);
        return view('transaksi.penarikan.index', compact('nasabahs','tariks'));
    }

    public function create()
    {
        $nasabahs = Nasabah::all();
        return view('transaksi.penarikan.create', compact('nasabahs'));
    }

    public function store(Request $request)
    {
        $setors = Tarik::create([
            'nasabah_id'        => $request->nasabah_id,
            'jumlah_tarik'      => $request->jumlah_tarik,
        ]);

        $setors->save();
        toast('Transaksi Berhasil','success');
        return redirect('tarik/index');
    }
    public function edit($id)
    {
        $nasabah = Nasabah::all();
        $tarik = tarik::findOrFail($id);
    }
    
    public function update(Request $request, $id)
    {
        $tarik = Tarik::find($id);
        $tarik->update($request->all());
        toast('Transaksi Berhasil Diperbarui','success');
        return redirect('tarik/index');
    }

    public function destroy($id)
    {
        $tarik = Tarik::find($id);
        $tarik->delete($tarik->all());
        toast('Transaksi Berhasil Dihapus','success');
        return redirect('tarik/index');
    }
}
