<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Faq extends Model

{
  protected $table = "faq";
  protected $fillable = ['id','titulo', 'Conteudo1','Conteudo2','Conteudo3','Conteudo4','Conteudo5','Conteudo6','Conteudo7','Conteudo8'];


}
