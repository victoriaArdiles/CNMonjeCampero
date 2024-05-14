<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ct_horarios';
    protected $primaryKey = 'horario_id';
    protected $fillable = ['nombre_horario', 'horario', 'CT_TIPO_HORARIOS_tipo_horario_id'];
    public function tipo_horarios()
    {
        return $this->belongsTo(TipoHorarios::class, 'CT_TIPO_HORARIOS_tipo_horario_id');
    }
    public function proyecciones_salas()
    {
        return $this->hasMany(ProyeccionesSalas::class, 'horario_id');
    }
}
