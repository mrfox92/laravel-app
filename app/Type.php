<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;

class Type extends Model
{
    public function service () {
        return $this->hasOne(Service::class);
    }
}
