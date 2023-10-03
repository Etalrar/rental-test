<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'movies';
    protected $primaryKey = 'id'; // Definimos la clave primaria personalizada
    public $incrementing = false; // Indicamos que no es autoincremental
    public $timestamps = false; // Desactivamos los timestamps

    protected $fillable = [
        'id', 'name', 'movies_categories_id'
    ];

    public function movies_categories()
    {
        return $this->belongsTo(MovieCategory::class, 'movies_categories_id');
    }

}
