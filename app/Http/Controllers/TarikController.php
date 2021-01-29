<?php

namespace App\Http\Controllers;
use App\Nasabah;
use Illuminate\Http\Request;

class TarikController extends Controller
{
    public function index()
    {
        $nasabahs = Nasabah::all();
        return view('transaksi.penarikan.index', compact('nasabahs'));
    }

    public function create()
    {
        return view('transaksi.penarikan.create');
    }
}
