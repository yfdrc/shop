<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tongji extends Model
{
    protected $guarded = [];

    public function Day($date,$table="sells")
    {
        Sell::where('date',$date)->sum("amount","money");
    }

}
