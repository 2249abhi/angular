<?php
namespace App\Providers;

use App\Services\User\UserService;
use Illuminate\Support\ServiceProvider;

/**
 * Registering User service
 */
class UserServiceProvider extends ServiceProvider
{

    /**
     * Binding User service
     */
    public function register()
    {
        $this->app->bind('UserService', function ($app) {
            return new UserService(
                // Injecting user interface to be used as user repository
                $app->make('App\Repositories\User\UserInterface'));
        });
    }
}
