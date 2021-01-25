<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugass';
    protected $guarded = [];


    public function generatecode()
    {
        $_kode       = "P";
        $kode = Petugas::where('kode_petugas', 'P')->orderBy('kode_petugas');
        $kode = $kode->count();
        if($kode == 0){
        $kode = $_kode."001";
    }else
    {
        $last = $kode+1;
        $kode = "$_kode".str_pad($last, 3, '0', STR_PAD_LEFT);
    }
        return $kode;
    }
}
