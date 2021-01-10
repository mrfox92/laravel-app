<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['service_id', 'user_id', 'rating', 'comment'];
    //  una review pertenece a un servicio/iniciativa
    public function service () {
        return $this->belongsTo(Service::class);
    }

    //  una reseña pertenece a un usuario
    public function user () {
        return $this->belongsTo(User::class);
    }
}
