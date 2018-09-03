<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    private $repository;

    /**
     * UserController constructor.
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the all users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->repository->all();
        $users = $users->sortByDesc('id');
        return view('users.index', compact('users'));
    }

    /**
     * redirects to the /users URL
     */
    public function home()
    {
        return redirect('/users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repository->create($request->all());
        return redirect('/users')->with('message', 'User was succesfully added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect('/users')->with('message', 'User was succesfully deleted!');
    }
}
