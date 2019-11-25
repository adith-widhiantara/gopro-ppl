<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biayatetap extends Model
{
  protected $fillable = [
    'user_id', 'komponen', 'kebutuhan', 'satuan', 'hargasatuan', 'jumlah'
  ];

  public function investasi()
  {
    return $this->hasOne(Investasi::class);
  }
}
