<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'alamat','barang','jumblah','produk_id'];
    public function produk(){
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
