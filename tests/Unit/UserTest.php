<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function testUserCreation()
    {
        $user = new User([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password')
        ]);
        $user->save();

    $this->assertDatabaseHas('users', [
        'email' => 'john.doe@example.com',
        ] );
    }
}