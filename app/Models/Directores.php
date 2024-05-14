<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directores extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ct_directores';
    protected $primaryKey = 'director_id';
    protected $fillable = ['nombre_completo_director', 'nombre_director', 'apellido_director', 'CT_GENEROS_genero_id'];
    public function generos()
    {
        return $this->belongsTo(Generos::class, 'CT_GENEROS_genero_id');
    }
    public function peliculas()
    {
        return $this->hasMany(Peliculas::class, 'director_id');
    }
}
