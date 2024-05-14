<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificaciones extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ct_clasificacion';
    protected $primaryKey = 'clasificacion_id';
    protected $fillable = ['nombre_clasificacion', 'descripcion_clasificacion'];
    public function peliculas()
    {
        return $this->hasMany(Peliculas::class, 'clasificacion_id');
    }

}
