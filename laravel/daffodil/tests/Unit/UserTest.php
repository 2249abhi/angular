<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Services\User\UserService;
use Mockery;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /*public function testBasicTest()
    {
        $this->assertTrue(true);
    }*/

    protected $mockUser,$userService;

    public function setup()
    {
    	parent::setup();

    	$this->mockUser = Mockery::mock('App\Repositories\User\UserInterface');
    	$this->userService = new UserService($this->mockUser);
    }

    public function testUserName()
    {
    	$userList = ['abhishek'];
    	$this->mockUser->shouldReceive('getUserById')->withanyargs()->andReturn($userList);
    	$result = $this->userService->getUser('1');

    	//print_r($result);
    	//die;

    	$this->assertEquals($userList,$result);
    }
}
