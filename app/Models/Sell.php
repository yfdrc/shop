<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    protected $guarded = [];

    public function good()
    {
        return $this->belongsTo(Good::class);
    }

}
