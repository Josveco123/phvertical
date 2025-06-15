<?php

namespace App\Models\Video;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prop\Property; // Asegúrate de que este namespace es correcto

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_props', // clave foránea hacia properties
        'nombre',
        'url', // te faltaba agregar esto para poder guardarla
    ];

    public function propiedad()
    {
        return $this->belongsTo(Property::class, 'id_props');
    }

}

