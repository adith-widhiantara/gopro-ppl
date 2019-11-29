<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investasi extends Model
{
    protected $fillable=[
      'id_user', 'id_pengajuanpetani', 'buktitf1', 'buktitf2'
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function pengajuanpetani(){
      return $this->belongsTo(Pengajuanpetani::class);
    }
}
