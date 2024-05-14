<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtitulos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ct_subtitulos';
    protected $primaryKey = 'subtitulo_id';
    protected $fillable = ['nombre_subtitulo','codigo_subtitulo'];
    public function peliculas_formatos()
    {
        return $this->hasMany(PeliculasFormatos::class, 'subtitulo_id');
    }
}
