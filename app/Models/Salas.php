<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ct_salas';
    protected $primaryKey = 'sala_id';
    protected $fillable = ['nombre_sala_formato', 'nombre_sala', 'fecha_apertura', 'fecha_mantenimiento', 'CT_FORMATOS_formato_id'];
    public function formatos()
    {
        return $this->belongsTo(Formatos::class, 'CT_FORMATOS_formato_id');
    }
    public function proyecciones_salas()
    {
        return $this->hasMany(ProyeccionesSalas::class, 'proyeccion_id');
    }
}
