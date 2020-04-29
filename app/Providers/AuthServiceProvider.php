<?php

namespace App\Providers;

use App\Book;
use App\Chapter;
use App\Policies\BooksPolicy;
use App\Policies\ChaptersPolicy;
use App\Policies\UsersPolicy;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UsersPolicy::class,
        Book::class => BooksPolicy::class,
        Chapter::class => ChaptersPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
