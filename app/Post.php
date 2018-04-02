<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public $timestamps = false;

   public $fillable = ['title', 'body']; //permet de definir les attributs a etr modifier en cas derreu massAssignment
}