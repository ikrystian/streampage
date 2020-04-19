<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function desktop() {
        return $this->belongsTo('App\Desktop');
    }
}
