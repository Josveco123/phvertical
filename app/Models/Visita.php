<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Visita extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'razon_social',
        'whatsapp',
        'ciudad',
        'fecha_visita',
    ];

    /**
     * Get the user that owns the visita.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
