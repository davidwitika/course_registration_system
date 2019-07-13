<?php

namespace Tests\Unit;

use App\User;
use function PHPSTORM_META\expectedArguments;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Collection;


class UsersCollectionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUsersCollection()
    {
      $users = User::all();
         get_class($users);

        $this->assertEquals('Illuminate\Database\Eloquent\Collection', get_class($users));
    }
}
