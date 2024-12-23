<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    protected $guard=[];

    public function users():BelongsToMany{
        return $this->belongsToMany(User::class,'role_user','user_id','role_id')->withPivot('added_by');
    }
}
