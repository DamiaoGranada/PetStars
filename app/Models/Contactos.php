<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contactos extends Model {
  
  protected $table = "Contactos";
  protected $fillable = ['email_comentario', 'mensagem','nome_comentario'];

}
