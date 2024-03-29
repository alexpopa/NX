<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract 
{
	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
				'name'      => 'required|max:255',
				'username'  => 'required|max:255|unique:users,username',
				'email'     => 'required|email|max:255|unique:users,email',
				'password'  => 'required|confirmed|min:8|max:60'
			]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
				'name'      => $data['name'],
				'username'  => $data['username'],
				'email'     => $data['email'],
				'password'  => bcrypt($data['password'])
			]);		
	}

}
