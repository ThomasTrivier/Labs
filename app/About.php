<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public function getPatchAttribute(){
        $url = $this->preview;
        
        if (stristr($this->preview, 'http') === false ) {
            $url = "storage/" . $this->preview;
        }

        return $url;
    }
}
