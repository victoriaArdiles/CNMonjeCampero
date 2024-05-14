<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoHorarios extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ct_tipo_horarios';
    protected $primaryKey = 'tipo_horario_id';
    protected $fillable = ['nombre_tipo_horario'];
    public function horarios()
    {
        return $this->hasMany(Horarios::class, 'tipo_horario_id');
    }
}
