<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    public function video()
    {
        return $this->hasMany(Video::class);
    }
}
