<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prosentasibagihasil extends Model
{
    protected $fillable = [
      'pendapatanperproduksi', 'bagihasil', 'jumlah'
    ];

    public function investasi()
    {
      return $this->hasOne(Investasi::class);
    }
}
