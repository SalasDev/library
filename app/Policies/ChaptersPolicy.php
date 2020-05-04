<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ChaptersPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create(User $user, $args)
    {
    	foreach ($args->users as $userBook) {
    		if ($user->id === $userBook->id) {
    			return $userBook->pivot->permission_id === 1 ? true : false;
    		}
    	}
        
    }

    public function storeChapter(User $user, $args)
    {
        foreach ($args->users as $userBook) {
    		if ($user->id === $userBook->id) {
    			return $userBook->pivot->permission_id === 1 ? true : false;
    		}
    	}
    }

    public function edit(User $user, $args)
    {
        foreach ($args->users as $userBook) {
    		if ($user->id === $userBook->id) {
    			return $userBook->pivot->permission_id === 1 ? true : false;
    		}
    	}
    }
}
