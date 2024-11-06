<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disewakan extends Model
{
    public function disewakanImageGalleries()
    {
        return $this->hasMany(DisewakanImageGallery::class);
    }
}
