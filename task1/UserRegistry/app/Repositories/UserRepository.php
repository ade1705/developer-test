<?php
namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\User;

class UserRepository implements UserInterface
{
    /**
     * @var User
     */
    private $user;
    
    /**
     * UserRepository constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Return all users
     *
     * @return mixed
     */
    public function all()
    {
        return $this->user->all();
    }

    /**
     * Create a new user
     *
     * @param array $user
     * @return mixed
     */
    public function create(array $user)
    {
        return $this->user->create($user);
    }

    /**
     * Find user by id
     *
     * @param string $id
     * @return mixed
     */
    public function find(string $id)
    {
        return $this->user->find($id);
    }

    /**
     * Delete user with id
     *
     * @param string $id
     * @return mixed
     */
    public function delete(string $id)
    {
        return $this->find($id)->delete();
    }
}
