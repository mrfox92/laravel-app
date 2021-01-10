<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $fillable = [
        'region_id',
        'name',
    ];
    //  un servicio tiene una comuna
    public function service () {
        return $this->hasOne(Service::class);
    }

    //  una comuna pertenece a una region
    public function region () {
        return $this->belongsTo(Service::class)->select('id', 'name');
    }
}
