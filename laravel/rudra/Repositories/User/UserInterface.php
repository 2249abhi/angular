<?php
namespace App\Repositories\User;

/**
 * Defining interfaces for User repository
 */
interface UserInterface
{
    /**
     * Interface to get user details by id
     * @param unknown $userId
     */
    public function getUserById($userId);
}
