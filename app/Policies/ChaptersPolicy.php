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
        return $user->id === $args->user->id;
    }

    public function storeChapter(User $user, $args)
    {
        return $user->id === $args->user->id;
    }

    public function edit(User $user, $args)
    {
        return $user->id === $args->user->id;
    }
}
