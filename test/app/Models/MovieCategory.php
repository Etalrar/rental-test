<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieCategory extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'movies_categories';
    protected $primaryKey = 'id'; // Definimos la clave primaria personalizada
    public $incrementing = false; // Indicamos que no es autoincremental
    // Indica si las columnas de fecha deben ser tratadas como Carbon instances
    public $timestamps = false;

    protected $fillable = [
        'id', 'name','rental_per_day','rental_extra_days','bonus'
    ];

}
