<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\CreateUserRequest;

class UsersController extends Controller {

    private $user;

	public function __construct(User $user)
	{
        $this->user = $user;
	}

	/**
	 * Shows the Sign Up page to the user.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('Users.SignUpView');
	}

	/**
	 * Stores the user's info to the database
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request, User $user)
	{
        $user->create($request->all());

		return "The values are stored, and you will be redirected to your home page!";//redirect('test');
	}

}
