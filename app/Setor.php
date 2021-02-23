<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $table = 'setors';
    protected $guarded = [];
    
    public function generatecode()
    {
        $_kode       = "TS ";
        $kode = Setor::where('kode_transaksi', 'TS ')->orderBy('kode_transaksi');
        $kode = $kode->count();
        if($kode == 0){
        $kode = $_kode."000001";
    }else
    {
        $last = $kode+1;
        $kode = "$_kode".str_pad($last, 3, '0', STR_PAD_LEFT);
    }
        return $kode;
    }

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class);
    }
}
