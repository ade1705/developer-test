<?php
namespace App\Interfaces;

interface UserInterface
{
    /**
     * Return all users
     *
     * @return mixed
     */
    public function all();
    /**
     * Create a new user
     *
     * @param array $user
     * @return mixed
     */
    public function create(array $user);
}
