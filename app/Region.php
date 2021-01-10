<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['id', 'name'];

    //  una region tiene una o muchas communas
    public function communes () {
        return $this->hasMany(Commune::class)->select('id', 'region_id', 'name', 'created_at', 'updated_at');
    }
}
