<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
    protected $guarded = ['id'];
    public function konsumen()
    {
        return $this->belongsTo(Konsumen::class, 'konsumen_id');
    }
    public function detail()
    {
        return $this->hasMany(DetailPemesanan::class, 'pemesanan_id');
    }
}
