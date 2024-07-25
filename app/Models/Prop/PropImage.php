<?php

namespace App\Models\Prop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prop\Property;

class PropImage extends Model
{
    use HasFactory;

    protected $table = "prop_image";

    protected $fillable = [
        'prop_id',
        'image',
    ];

    public $timestamps = true;

    // Definir la relación belongsTo con Property
    public function property()
    {
        return $this->belongsTo(Property::class, 'prop_id');
    }
}
