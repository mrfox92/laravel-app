<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['user_id'];

    //  un consumidor puede inscribirse en uno o muchos servicios/iniciativas,
    //  para este tipo de relaciones se establecen las relaciones en los dos modelos
    public function services () {
        return $this->belongsToMany(Service::class);
    }

    public function user () {
        return $this->belongsTo(User::class)->select('id', 'role_id', 'name', 'email');
    }
}
