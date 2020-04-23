<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
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
}
