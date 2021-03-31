<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Tarik extends Model
{
    use AutoNumberTrait;

    protected $table = 'tariks';
    protected $guarded = [];
    
    public function getAutoNumberOptions()
    {
        return [
            'kode_transaksi' => [
                'format' => 'TS 0?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 3 // The number of digits in an autonumber
            ]
        ];
    }

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class);
    }
}
