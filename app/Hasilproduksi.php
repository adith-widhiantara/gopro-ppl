<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasilproduksi extends Model
{
  protected $fillable = [
    'totalbobot', 'survivalrate', 'volumeproduksi', 'hargaperkg', 'totalpenerimaan'
  ];

  public function investasi()
  {
    return $this->hasOne(Investasi::class);
  }
}
