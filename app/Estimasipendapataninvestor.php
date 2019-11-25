<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimasipendapataninvestor extends Model
{
    protected $fillable = [
      'banyakbagihasildana', 'bagihasildana', 'totalbagihasildana', 'profitperpanen', 'totalprofitperpanen'
    ];

    public function investasi()
    {
      return $this->hasOne(Investasi::class);
    }
}
