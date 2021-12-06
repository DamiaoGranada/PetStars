<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Apoios extends Model {
  
  protected $table = "apoio";
  protected $fillable = ['nome_apoio', 'descri_apoio','caminho_apoio'];

}
