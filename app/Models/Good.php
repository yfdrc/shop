<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $guarded = [];

    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
}
