<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuanpetani extends Model
{
    protected $fillable = [
      'luaslahan', 'tipetanaman', 'KTP', 'surattanah', 'NPWP'
    ];

    public function investasi()
    {
      return $this->hasOne(Investasi::class);
    }
}
