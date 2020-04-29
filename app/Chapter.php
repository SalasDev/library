<?php

namespace App;

use App\Book;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $guarded = [];

    public function Book()
    {
    	return $this->belongsTo(Book::class);
    }
}
