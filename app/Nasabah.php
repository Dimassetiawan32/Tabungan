<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $table = 'nasabahs';
    protected $guarded = [];
    protected $primaryKey = 'userId';

    public function generatecode()
    {
        $_kode       = "NB ";
        $kode = Nasabah::where('kode_nasabah', 'NB ')->orderBy('kode_nasabah');
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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
