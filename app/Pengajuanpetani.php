<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuanpetani extends Model
{
    protected $fillable = [
      'namaproyek', 'luaslahan', 'satuan', 'jenistanaman', 'jangkawaktu', 'surattanah', 'NPWP', 'check'
    ];

    public function investasi()
    {
      return $this->hasOne(Investasi::class);
    }
}
