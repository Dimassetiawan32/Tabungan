<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelass';
    protected $guarded = [];

    public function nasabah()
    {
        return $this->hasMany(Nasabah::class);
    }
}

