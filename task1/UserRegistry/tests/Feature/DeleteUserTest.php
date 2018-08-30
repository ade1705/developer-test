<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteUserTest extends TestCase
{
    /**
     * test to see if it deletes
     *
     * @return void
     */
    public function test_it_deletes_created_user()
    {
        //create one new user
        $users = $this->createNewUsers(1);
        //get the first and only user
        $user = $users->first();
        //send the user to the delete route
        $response = $this->delete("/users/{$user->id}");
        //see if it is present in the database after it has been deleted
        $this->assertDatabaseMissing('users', $user->toArray());
        //check if redirects back to users page
        $response->assertRedirect('/users');
        //see if the says the text 'User was successfully deleted'
        $response->assertSessionHas('message', 'User was succesfully deleted!');
    }
}
