<?php

namespace App\Models\Prop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prop\PropImage;
use App\Models\Video\Video;

class Property extends Model
{
    use HasFactory;


    protected $table = "props";

    protected $fillable = [
        'title',
        'price',
        'image',
        'beds',
        'baths',
        'sq_ft',
        'home_type',
        'year_built',
        'price_sqft',
        'more_info',
        'location',
        'agent_name',
        'city',
        'type'




    ];

    public $timestamps = true;

    // Definir la relación uno a muchos con PropImage
    public function images()
    {
        return $this->hasMany(PropImage::class, 'prop_id');
    }

public function video()
{
    return $this->hasOne(Video::class, 'id_props');
}
}
