<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function commentaires(){
        return $this->hasMany(Comment::class,"article","id");
    }

    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function getPatchAttribute(){
        $url = $this->article_photo;
        
        if (stristr($this->article_photo, 'http') === false ) {
            $url = "storage/" . $this->article_photo;
        }

        return $url;
    }
}
