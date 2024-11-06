<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisewakanImageGallery extends Model
{
    public function disewakan()
    {
        return $this->belongsTo(Disewakan::class);
    }
}
