<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'photo', 'judul', 'deskripsi', 'harga', 'return', 'interval', 'slot'
    ];
}
