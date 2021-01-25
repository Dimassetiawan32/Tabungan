<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function index()
    {
        return view('transaksi.setor.index');
    }

    public function create()
    {
        return view('transaksi.setor.create');
    }
}
