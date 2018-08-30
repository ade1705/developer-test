<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateUserTest extends TestCase
{
    /**
     * test to see if create page opens.
     *
     * @return void
     */
    public function test_it_stores_users()
    {
        //make a new user
        $user = factory('App\User')->make();
        //convert to array
        $data = $user->toArray();
        //sent to user post route to save into database
        $response = $this->post('users', $data);
        //see if present in the database
        $this->assertDatabaseHas('users', $data);
        //check if it redirects back to the index page
        $response->assertRedirect('/users');
        //see if it says the text 'Contact was successfully added'
        $response->assertSessionHas('message', 'User was succesfully added!');
    }
}
