<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table = 'report';
    protected $guarded = ['id'];
    public function foreman()
    {
        return $this->belongsTo(Foreman::class);
    }
}
