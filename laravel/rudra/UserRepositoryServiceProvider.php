<?php
namespace App\Providers;

use App\Entities\User;
use App\Repositories\User\UserRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Registering the User repository
 */
class UserRepositoryServiceProvider extends ServiceProvider
{

    /**
     * Binding User interface
     */
    public function register()
    {
        $this->app->bind('App\Repositories\User\UserInterface', function ($app) {
            return new UserRepository(new User());
        });
    }
}
