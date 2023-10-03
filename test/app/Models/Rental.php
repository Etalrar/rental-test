<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'rentals';

    // Clave primaria de la tabla
    protected $primaryKey = 'id';

    // Indica si los IDs son de tipo UUID
    public $incrementing = false;

    // Columnas permitidas para asignación masiva
    protected $fillable = [
        'id',
        'date_begin_rental',
        'date_end_rental',
        'customers_id',
        'movies_id'
    ];

    public function movies()
    {
        return $this->belongsTo(Movie::class, 'movies_id');
    }

    public function customers()
    {
        return $this->belongsTo(Customer::class, 'customers_id');
    }

    // Indica si las columnas de fecha deben ser tratadas como Carbon instances
    public $timestamps = false;
}
