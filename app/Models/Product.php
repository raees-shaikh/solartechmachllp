<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function medias()
    {
        return $this->morphMany(Media::class, 'model');
    }

}
