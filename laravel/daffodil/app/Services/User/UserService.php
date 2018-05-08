<?php
namespace App\Services\User;

use App\Repositories\User\UserInterface;

/**
 * Service class containing the business logic
 */
class UserService
{

    // User repository reference
    protected $userRepo;

    /**
     * Initializing the repository reference with interface
     *
     * @param userInterface $userRepo
     */
    public function __construct(UserInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
     * Method to get user details
     *
     * @param mixed $user
     * @return string
     */
    public function getUser($user)
    {
        return $this->userRepo->getUserById($user);
    }
}
