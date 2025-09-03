<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwalLoading extends Model
{
    use HasFactory;
    protected $table = 'awalloading';
    protected $guarded = ['id'];

    public function foreman()
    {
        return $this->belongsTo(Foreman::class);
    }
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }
    public function penunjukan()
    {
        return $this->belongsTo(Penunjukan::class, 'surat_penunjukan_id', 'id', 'surat_penunjukan');
    }
    public function report()
    {
        return $this->hasMany(Report::class, 'awalloading_id');
    }
}
