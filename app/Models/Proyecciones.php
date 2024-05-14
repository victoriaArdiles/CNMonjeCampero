<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecciones extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ct_proyecciones';
    protected $primaryKey = 'proyeccion_id';
    protected $fillable = ['dia_proyeccion', 'fecha_proyeccion'];
    public function proyecciones_salas()
    {
        return $this->hasMany(ProyeccionesSalas::class, 'proyeccion_id');
    }
}
