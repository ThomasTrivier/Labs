<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function commentaires(){
        return $this->hasMany(Comment::class,"article","id");
    }
}
