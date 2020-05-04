<?php

namespace App\Policies;

use App\Book;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BooksPolicy
{
    use HandlesAuthorization;

    public function edit(User $user, Book $book)
    {
        foreach ($book->users as $userBook) {
            if ($userBook->id === $user->id){
                return ($userBook->pivot->permission_id === 1);
            }
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Book  $book
     * @return mixed
     */
    public function update(User $user, Book $book)
    {
        foreach ($book->users as $userBook) {
            if ($userBook->id === $user->id){
                return ($userBook->pivot->permission_id === 1);
            }
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Book  $book
     * @return mixed
     */
    public function delete(User $user, Book $book)
    {
        foreach ($book->users as $userBook) {
            if ($userBook->id === $user->id){
                return ($userBook->pivot->permission_id === 1);
            }
        }
    }
}