<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;

class Category extends Model
{
    //  un servicio solo puede tener una categoria
    public function service () {
        return $this->hasOne(Service::class);
    }
}
