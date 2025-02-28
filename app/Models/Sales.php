<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_barang',
        'qty',
        'harga_jual',
        'total',
        'status'
    ];
}
