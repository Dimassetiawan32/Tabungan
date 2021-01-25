<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarikController extends Controller
{
    public function index()
    {
        return view('transaksi.penarikan.index');
    }

    public function create()
    {
        return view('transaksi.penarikan.create');
    }
}
