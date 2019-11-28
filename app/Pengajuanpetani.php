<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuanpetani extends Model
{
    protected $fillable = [
      'user_id', 'namaproyek', 'luaslahan', 'satuan', 'jenistanaman','alamat', 'jangkawaktu', 'surattanah', 'NPWP', 'check', 'gambar1', 'gambar2', 'gambar3',
      '1beratpupuk', '1satuanpupuk', '1totalpupuk', '1beratbibit', '1satuanbibit', '1totalbibit', '1totaloperasional', '1jumlahkaryawan', '1satuankaryawan', '1totalkaryawan', '1sewalahan', '1totalperalatan', '1totalsemua',
      '2survivalrate', '2satuanbibit', '2satuanjadi', '2totaljadi', '2hargajual', '2totalpenerimaan',
      '3lababersih', '3bagihasil', '3jumlah',
      '4roi'
    ];

    public function investasi()
    {
      return $this->hasOne(Investasi::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }
}
