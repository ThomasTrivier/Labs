<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    public function getPatchAttribute(){
        $url = $this->photo_path;
        
        if (stristr($this->photo_path, 'http') === false ) {
            $url = "storage/" . $this->photo_path;
        }

        return $url;
    }
}
