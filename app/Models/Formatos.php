<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formatos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ct_formatos';
    protected $primaryKey = 'formato_id';
    protected $fillable = ['nombre_formato', 'descripcion_formato'];
    public function peliculas_formatos()
    {
        return $this->hasMany(PeliculasFormatos::class, 'formato_id');
    }
    public function salas()
    {
        return $this->hasMany(Salas::class, 'formato_id');
    }
}
