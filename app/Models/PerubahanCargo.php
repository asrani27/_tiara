<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerubahanCargo extends Model
{
    use HasFactory;
    protected $table = 'perubahancargo';
    protected $guarded = ['id'];
<<<<<<< HEAD
    public function foreman()
    {
        return $this->belongsTo(Foreman::class);
    }
=======
>>>>>>> 90ef2df (f)
}
