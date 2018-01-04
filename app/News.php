<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  protected $table = 'news';
  protected $primarykey = 'id';
  protected $fillable = ['title','content'];
}
