<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;
use App\Models\Eventos;

class Foto extends Model
{
  protected $table = "foto";
  protected $fillable = ['tipo_foto  ', 'caminho'];

  public function Animal(){
    return $this->hasMany(Animal::class,"id_animal","id");
  }

  public function eventos(){
    return $this->hasMany(Animal::class,"id_eventos","id");
  }

}
