<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowUsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_shows_user_listing_page()
    {
        //visit users url
        $response = $this->get('/users');
        //check if it sent through
        $response->assertStatus(200);
        //check if it went to the views file - users.index
        $response->assertViewIs('users.index');
        //check if text 'User Listing' show on page
        $response->assertSee('User Listing');
    }

    /**
     * test to show all the users in the database are displayed on the page
     */
    public function test_it_shows_users_in_database()
    {
        //create new users
        $users = $this->createNewUsers(10);
        //visit users url
        $response = $this->get('/users');
        //check if name of the the first user created is on the page
        $response->assertSee($users->first()->name);
    }
}
