<?php

namespace App;

use App\BookPermission;
use App\Chapter;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function users()
    {
    	return $this->belongsToMany(User::class, 'book_permissions')->using(BookPermission::class)->withPivot('permission_id');
    }

    public function chapters()
    {
    	return $this->hasMany(Chapter::class);
    }
}
