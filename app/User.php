<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'nombre', 'email', 'password', 'estado' , 'rol_id' ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
  
    public function getJWTCustomClaims()
    {
        return [];
    }
}
