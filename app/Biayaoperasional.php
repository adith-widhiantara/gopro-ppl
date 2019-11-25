<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiayaOperasional extends Model
{
  protected $fillable = [
      'user_id', 'komponen', 'kebutuhan', 'satuan', 'hargasatuan', 'jumlah', 'total'
  ];

  public function investasi()
  {
    return $this->hasOne(Investasi::class);
  }
}
