<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Foto;
use App\Models\Pessoas_animal;

class Animal extends Model

{
  protected $table = "animal";
  protected $fillable = ['nome_animal', 'descricao_animal','data_acolhimento',
  'idade_animal','especie','genero','local_animal'];

  public function foto(){
    return $this->hasMany(Foto::class,"id_animal","id");
  }

  public function pessoas_animal(){
    return $this->hasMany(Pessoas_animal::class,"id_animal","id");
  }
}
