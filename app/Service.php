<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Service extends Model
{
    use SoftDeletes;
    // public $table = "service_customer";
    protected $fillable = ['seller_id', 'category_id', 'commune_id', 'type_id', 'name', 'description', 'price', 'slug', 'picture', 'status', 'quantity', 'av_status', 'finished_at'];

    //  realizar conteo de la cantidad de consumidores inscritos en un servicio/iniciativa
    // protected $withCount = ['customers'];
    //  estados tipo servicios
    const SERVICE = 1;
    const INICIATIVE = 2;
    const EVENT = 3;
    const CONVOCATORY = 4;

    // estados servicios
    const PUBLISHED = 1;
    const PENDING = 2;
    const REJECTED = 3;

    //  estado disponibilidad
    const AVAILABLE = 1;
    const UNDERWAY  = 2;
    const FINISHED  = 3;

    //  reconstruir el path de las imagenes
    public function pathAttachment () {
        return "/images/services/" . $this->picture;
    }

    //  un servicio solo tiene una caterogia. relacion uno a uno
    public function category () {
        return $this->belongsTo(Category::class)->select('id', 'name');
    }

    
    //  un servicio solo tiene una comuna como locacion disponible del servicio
    public function commune () {
        return $this->belongsTo(Commune::class)->select('id', 'region_id', 'name');
    }
    
    public function type () {
        return $this->belongsTo(Type::class)->select('id', 'name');
    }
    //  un servicio puede tener un vendedor, y un vendedor puede ofrecer uno o muchos servicios. relacion uno a muchos
    public function seller () {
        return $this->belongsTo(Seller::class);
    }

    //  un servicio/iniciativa puede tener uno o muchos consumidores
    //  para este tipo de relaciones se establecen las relaciones desde los dos modelos
    public function customers () {
        return $this->belongsToMany(Customer::class);
    }

    //  un servicio/iniciativa puede tener una o muchas reseñas
    public function reviews () {
        return $this->hasMany(Review::class)->select('id', 'service_id', 'user_id', 'rating', 'comment', 'created_at');
    }
}
