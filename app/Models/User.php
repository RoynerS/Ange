<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use MongoDB\Laravel\Eloquent\Model;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    // Campos que se pueden asignar masivamente
    protected $fillable = ['Nombre', 'Correo', 'password'];

    // Campos que no se deben mostrar en las respuestas
    protected $hidden = ['password', 'remember_token'];

    // Puedes definir valores predeterminados para el rol aquí si lo deseas

}