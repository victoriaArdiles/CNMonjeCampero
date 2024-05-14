<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyeccionesSalas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ct_proyecciones_salas';
    protected $primaryKey = 'ct_proyeccion_sala';
    protected $fillable = ['informacion_general', 'precio_funcion', 'CT_HORARIOS_horario_id', 'CT_PROYECCIONES_proyeccion_id', 'duracion_funcion', 'CT_SALAS_sala_id', 'CT_PELICULAS_FORMATOS_ct_pelicula_formato'];
    public function horarios()
    {
        return $this->belongsTo(Horarios::class, 'CT_HORARIOS_horario_id');
    }
    public function proyecciones()
    {
        return $this->belongsTo(Proyecciones::class, 'CT_PROYECCIONES_proyeccion_id');
    }
    public function salas()
    {
        return $this->belongsTo(Salas::class, 'CT_SALAS_sala_id');
    }
    public function peliculas_formatos()
    {
        return $this->belongsTo(PeliculasFormatos::class, 'CT_PELICULAS_FORMATOS_ct_pelicula_formato');
    }
}
