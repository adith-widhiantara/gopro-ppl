<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investasi extends Model
{
    protected $fillable = [
      'user_id', 'pengajuanpetani_id', 'biayaoperasional_id', 'biayatetap_id', 'hasilproduksi_id', 'pendapatanperproduksi_id', 'prosentasebagihasil_id', 'estimasipendapataninvestor_id', 'proyeksiroiinvestor_id'
    ];

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function pengajuanpetani(){
    return $this->belongsTo(Pengajuanpetani::class);
  }

  public function biayaoperasional(){
    return $this->belongsTo(Biayaoperasional::class);
  }

  public function biayatetap(){
    return $this->belongsTo(Biayatetap::class);
  }

  public function hasilproduksi(){
    return $this->belongsTo(Hasilproduksi::class);
  }

  public function pendapatanperproduksi(){
    return $this->belongsTo(Pendapatanperproduksi::class);
  }

  public function prosentasebagihasil(){
    return $this->belongsTo(Prosentasebagihasil::class);
  }

  public function estimasipendapataninvestor(){
    return $this->belongsTo(Estimasipendapataninvestor::class);
  }

  public function proyeksiroiinvestor(){
    return $this->belongsTo(Proyeksiroiinvestor::class);
  }
}
