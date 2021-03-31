<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use AutoNumberTrait;

    protected $table = 'petugass';
    protected $guarded = [];


    public function getAutoNumberOptions()
    {
        return [
            'kode_petugas' => [
                'format' => 'P0?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 2 // The number of digits in an autonumber
            ]
        ];
    }

}
