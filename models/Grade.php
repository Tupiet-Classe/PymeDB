<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    /** QUE ES ESTO TUDOR? SI LO PONEMOS DA FALLO */
    // Nom de la taula
    //protected $table = 'deliveries';

    // Camps de la taula a replenar (El id i el timespace no es fiquen)
    protected $fillable = [
        'qualification',
        'user_id',
        'description',
        'hidden',
    ];
}
