<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ComposeUserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_admin_can_create_new_user()
    {
        $user = make('App\User', ['password' => bcrypt('foo')]);
        $user = $user->toArray();
        $user['password'] = "foobar";
        $user['password_confirmation'] = "foobar";
        $response = $this->post(route('users.store'), $user);
        $this->assertDatabaseHas('users', ['phone' => $user['phone']]);
    }
}
