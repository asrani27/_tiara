<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table = 'surat_pengajuan';
    protected $guarded = ['id'];
    public function foreman()
    {
        return $this->belongsTo(Foreman::class);
    }
}
