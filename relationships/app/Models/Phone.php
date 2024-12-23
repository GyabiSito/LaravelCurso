<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Phone extends Model
{
    protected $guard=[];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function sim():HasOne{
        return $this->hasOne(Sim::class);
    }
}
