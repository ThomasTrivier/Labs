<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function getPatchAttribute(){
        $url = $this->media_path;
        
        if (stristr($this->media_path, 'http') === false ) {
            $url = "storage/" . $this->media_path;
        }

        return $url;
    }
}
