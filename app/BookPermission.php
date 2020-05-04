<?php

namespace App;

use App\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BookPermission extends Pivot
{
	public $incrementing = true;
	public $table = 'book_permissions';
    public function permission()
    {
    	return $this->hasOne(Permission::class);
    }
}
