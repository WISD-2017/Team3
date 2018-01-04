<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primarykey = 'id';
    protected $fillable = ['title','content'];
}
