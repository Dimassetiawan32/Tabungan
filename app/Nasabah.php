<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Nasabah extends Model
{
    use AutoNumberTrait;

    protected $table = 'nasabahs';
    protected $guarded = [];
    
    public function getAutoNumberOptions()
    {
        return [
            'kode_nasabah' => [
                'format' => 'NB 0?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 5 // The number of digits in an autonumber
            ]
        ];
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function setor()
    {
        return $this->hasMany(Setor::class);
    }

    public function tarik()
    {
        return $this->hasMany(Tarik::class);
    }
}
