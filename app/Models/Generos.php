<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ct_generos';
    protected $primaryKey = 'genero_id';
    protected $fillable = ['nombre_genero'];
    public function directores()
    {
        return $this->hasMany(Directores::class, 'genero_id');
    }
}
