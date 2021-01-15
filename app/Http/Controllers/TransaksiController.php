<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('transaksi.setor.index');
    }
    public function index2()
    {
        return view('transaksi.penarikan.index');
    }
    

}
