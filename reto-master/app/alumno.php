<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;






class alumno extends Authenticatable
{
    use Notifiable;

 	protected $table = 'alumnos';
    protected $guard = 'alumno';

    protected $fillable = [
        'nombreapellidos', 'email', 'password', 'dni', 'direccion', 'ciudad', 'telefono'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}