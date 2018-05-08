<?php
namespace App\Repositories\User;

use Illuminate\Database\Eloquent\Model;

/**
 * Repository class to communicate with data sources of different kinds
 */
class UserRepository implements UserInterface
{

    // User model referencec
    protected $userModel;

    /**
     * Assigning $userModel to injected model
     *
     * @param Model $pokemon
     * @return UserRepository
     */
    public function __construct(Model $user)
    {
        $this->userModel = $user;
    }

    /**
     * Returns the User details
     *
     * @param mixed $userId
     * @return Model
     */
    public function getUserById($userId)
    {
        if ($userId == 1) {
            return 'Rudraksh';
        } else if ($userId == 2) {
            return 'Pathak';
        } else {
            return 'No user found';
        }
    }
}
