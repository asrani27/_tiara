<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complated extends Model
{
    use HasFactory;
    protected $table = 'complated';
    protected $guarded = ['id'];
}
