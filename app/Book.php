<?php

namespace App;

use App\Chapter;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function chapters()
    {
    	return $this->hasMany(Chapter::class);
    }
}
