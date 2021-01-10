<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{

    use Notifiable, Billable;

    protected static function boot () {
        parent::boot();
        static::creating( function( User $user ) {
            if ( !\App::runningInConsole() ) {
                $user_slug = $user->name . " ". $user->last_name;
                $user->slug = Str::slug($user_slug, '-');
            }
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [ 
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //  a un usuario le pertenece un role de usuario
    public function role() {
        return $this->belongsTo(\App\Role::class);
    }

    //  comprobar role usuario y devolvemos el nombre del role
    public static function navigation () {
        return auth()->check() ? auth()->user()->role->name : 'guest';
    }

    //  un vendedor tambien es un usuario
    public function seller () {
        return $this->hasOne(Seller::class);
    }

    public function customer () {
        return $this->hasOne(Customer::class);
    }

    //  un usuario puede autenticarse con una red social
    public function socialAccount () {
        return $this->hasOne(UserSocialAccount::class);
    }

    //  
    public function getAvatarUser () {
        return "/images/users/" . $this->avatar;
    }
}
