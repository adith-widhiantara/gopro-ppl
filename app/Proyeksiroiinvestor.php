<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyeksiroiinvestor extends Model
{
    protected $fillable = [
      'roiperkontrak', 'roiperbagihasil', 'roiperbulan', 'nilaiinvestasi'
    ];

    public function investasi()
    {
      return $this->hasOne(Investasi::class);
    }
}
