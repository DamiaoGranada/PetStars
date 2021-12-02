<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Animal;

class Pessoas_animal extends Model
{
  protected $table = "pessoas_animal";
  protected $fillable = ['data_adocao'];

  public function user(){
    return $this->belongsTo(User::class,"user_id","id")->withTrashed();
  }
  public function Animal(){
    return $this->hasMany(Animal::class,"id_animal","id");
  }
}
