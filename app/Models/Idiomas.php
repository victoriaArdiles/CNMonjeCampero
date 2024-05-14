<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idiomas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ct_idiomas';
    protected $primaryKey = 'idioma_id';
    protected $fillable = ['nombre_idioma','codigo_idioma'];
    public function peliculas_formatos()
    {
        return $this->hasMany(PeliculasFormatos::class, 'idioma_id');
    }
}
