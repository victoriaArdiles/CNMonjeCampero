<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ct_peliculas';
    protected $primaryKey = 'pelicula_id';
    protected $fillable = ['titulo_pelicula', 'sinopsis', 'duracion_pelicula', 'imagen_pelicula', 'fecha_estreno_pelicula', 'CT_CLASIFICACION_clasificacion_id', 'CT_DIRECTORES_director_id'];
    public function clasificaciones()
    {
        return $this->belongsTo(Clasificaciones::class, 'CT_CLASIFICACION_clasificacion_id');
    }
    public function directores()
    {
        return $this->belongsTo(Directores::class, 'CT_DIRECTORES_director_id');
    }
    public function peliculas_formatos()
    {
        return $this->hasMany(PeliculasFormatos::class, 'pelicula_id');
    }
}
