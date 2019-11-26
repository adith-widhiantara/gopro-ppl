<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuanpetani extends Model
{
    protected $fillable = [
      'user_id', 'namaproyek', 'luaslahan', 'satuan', 'jenistanaman', 'jangkawaktu', 'surattanah', 'NPWP', 'check'
    ];

    public function investasi()
    {
      return $this->hasOne(Investasi::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }
}
