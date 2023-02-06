<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    // Nom de la taula
    protected $table = 'grades';

    // Camps de la taula a replenar (El id i el timespace no es fiquen)
    protected $fillable = [
        'qualification',
        'user_id',
        'description',
        'hidden',
    ];
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
