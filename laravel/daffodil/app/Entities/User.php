<?php
namespace App\Entities;

use Eloquent;

/**
 * User entity to be used as a model for database operations
 */
class User extends Eloquent
{

    // Table name for entity
    protected $table = "users";

    // Primary key in table for entity
    protected $primaryKey = "id";

    // Adding timestamps for the entity table
    public $timestamps = true;
}