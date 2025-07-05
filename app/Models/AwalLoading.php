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
}
