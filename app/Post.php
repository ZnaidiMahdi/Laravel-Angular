<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{public $timestamps = false;

    protected $table = 'posts';
    public $primaryKey ='id';
     protected $fillable = ['id', 'title', 'body'];
}
