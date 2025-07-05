<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demage extends Model
{
    use HasFactory;
    protected $table = 'demage';
    protected $guarded = ['id'];
    public function foreman()
    {
        return $this->belongsTo(Foreman::class);
    }
}
