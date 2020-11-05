<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $guarded = [];

    public function good()
    {
        return $this->belongsTo(Good::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

}
