<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = ['nit', 'correo', 'telefono'];//evita el erro de asignación masiva.
    public $timestamps = false; //usar este codigo si no quiero que se inserten ni el create_at ni el upliated_at

}
