<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Foto extends Model
{
  protected $table = "foto";
  protected $fillable = ['tipo_foto  ', 'caminho'];

  public function Animal(){
    return $this->hasMany(Animal::class,"id_animal","id");
  }

}
