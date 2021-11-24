<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
  protected $fillable = ['name', 'description'];

  public function posts(){
    return $this->hasMany(Post::class,"category_id","id");
  }
}
