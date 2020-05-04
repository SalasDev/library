<?php

namespace App;

use App\BookPermission;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    public function bookPermission()
    {
    	return $this->belongsTo(BookPermission::class);
    }
}
