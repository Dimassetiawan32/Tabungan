<?php

namespace App\Http\Controllers;
use App\Nasabah;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function index()
    {
        $nasabahs = Nasabah::all();
        return view('transaksi.setor.index', compact('nasabahs'));
    }

    public function create()
    {
        return view('transaksi.setor.create');
    }
}
