<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penunjukan extends Model
{
    use HasFactory;
    protected $table = 'surat_penunjukan';
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function foreman()
    {
        return $this->belongsTo(Foreman::class, 'foreman_id');
    }
}
