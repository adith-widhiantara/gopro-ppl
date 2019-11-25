<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendapatanperproduksi extends Model
{
    protected $fillable = [
      'totalpenerimaan', 'biayaoperasional', 'lababersih'
    ];

    public function investasi()
    {
      return $this->hasOne(Investasi::class);
    }
}
