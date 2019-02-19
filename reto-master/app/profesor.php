<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;




class profesor extends Authenticatable
{
    use Notifiable;

    protected $guard = 'profesor';
    protected $table = 'profesores';

    protected $fillable = [
        'nombreapellidos', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}