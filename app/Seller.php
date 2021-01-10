<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = ['user_id', 'picture'];

    //  un vendedor puede tener uno o muchos servicios
    public function services () {
        return $this->hasMany(Service::class);
    }
    //  un vendedor tambien es un usuario
    public function user () {
        return $this->belongsTo(User::class);
    }

    public function getImageProfile () {
        return "/images/sellers/" . $this->picture;
    }

    public function getImageBanner () {
        return "/images/banners/" .$this->banner; 
    }
}
