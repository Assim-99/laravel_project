<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{

    // use HasFactory, Notifiable;

    protected $fillable = [
        'firstName',
        'lastName',
        'username',
        'email',
        'password'
    ];
    

    protected $hidden = [
        'password',
        'remember_token',
    ];


       protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
