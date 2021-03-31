<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Nasabah;
use App\Setor;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SetorController extends Controller
{ 
    public function index()
    {
        $kelass = Kelas::paginate(3);
        $nasabahs = Nasabah::paginate(3);
        $setors = Setor::paginate(3);
        return view('transaksi.setor.index', compact('kelass','nasabahs','setors'));
    }

    public function create()
    {
        $nasabahs = Nasabah::all();
        return view('transaksi.setor.create', compact('nasabahs'));
    }

    public function store(Request $request)
    {
        $setors = Setor::create([
            'nasabah_id'        => $request->nasabah_id,
            'jumlah_transfer'   => $request->jumlah_transfer,
        ]);

        $setors->save();
        toast('Transaksi Berhasil','success');
        return redirect('setor/index');
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
        toast('Transaksi Berhasil Diperbarui','success');
        return redirect('setor/index');
    }

    public function destroy($id)
    {
        $setor = Setor::find($id);
        $setor->delete($setor->all());
        toast('Transaksi Berhasil Dihapus','success');
        return redirect('setor/index');
    }
}
