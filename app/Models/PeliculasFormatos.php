<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeliculasFormatos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ct_peliculas_formatos';
    protected $primaryKey = 'ct_pelicula_formato';
    protected $fillable = ['pelicula_titulo_completo', 'CT_PELICULAS_pelicula_id', 'CT_FORMATOS_formato_id', 'CT_IDIOMAS_idioma_id', 'CT_SUBTITULOS_subtitulo_id'];
    public function peliculas()
    {
        return $this->belongsTo(Peliculas::class, 'CT_PELICULAS_pelicula_id');
    }
    public function formatos()
    {
        return $this->belongsTo(Formatos::class, 'CT_FORMATOS_formato_id');
    }
    public function idiomas()
    {
        return $this->belongsTo(Idiomas::class, 'CT_IDIOMAS_idioma_id');
    }
    public function subtitulos()
    {
        return $this->belongsTo(Subtitulos::class, 'CT_SUBTITULOS_subtitulo_id');
    }
    public function proyecciones_salas()
    {
        return $this->hasMany(ProyeccionesSalas::class, 'ct_pelicula_formato');
    }
}
