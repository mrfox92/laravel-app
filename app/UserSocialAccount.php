<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSocialAccount extends Model
{
    protected $fillable = ['user_id', 'provider', 'provider_id'];

    //  un user social account pertenece a un usuario
    public function user () {
        return $this->belongsTo(User::class);
    }
}
