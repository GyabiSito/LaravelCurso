<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
    protected $guarded = [];

    public function phone(){
        return $this->belongsTo(User::class);
    }
}
