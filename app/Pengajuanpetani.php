<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuanpetani extends Model
{
    protected $fillable = [
      'user_id', 'namaproyek', 'luaslahan', 'satuan', 'jenistanaman','alamat', 'jangkawaktu', 'surattanah', 'NPWP', 'check', 'gambar1', 'gambar2', 'gambar3',
      'aberatpupuk', 'asatuanpupuk', 'atotalpupuk', 'aberatbibit', 'asatuanbibit', 'atotalbibit', 'atotaloperasional', 'ajumlahkaryawan', 'asatuankaryawan', 'atotalkaryawan', 'asewalahan', 'atotalperalatan', 'atotalsemua',
      'bsurvivalrate', 'bsatuanbibit', 'bsatuanjadi', 'btotaljadi', 'bhargajual', 'btotalpenerimaan',
      'clababersih', 'cbagihasil', 'cjumlah',
      'droi'
    ];

    public function investasi()
    {
      return $this->hasOne(Investasi::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }
}
