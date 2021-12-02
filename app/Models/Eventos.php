<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Foto;


class Eventos extends Model

{
  protected $table = "eventos";
  protected $fillable = ['nome_evento', 'descri_evento','data_evento',
  'local_evento','tipo_evento'];


  public function foto(){
    return $this->hasMany(Foto::class,"id_eventos","id");
  }

}
