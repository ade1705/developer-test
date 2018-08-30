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
}
