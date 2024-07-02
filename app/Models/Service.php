<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'hp', 'alamat', 'keluhan', 'produk_id'
    ];
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

}
