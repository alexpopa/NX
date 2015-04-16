<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest {

	/**
	 *
	 * Get the validation rules that apply to the request
	 *
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name'      => 'required',
			'username'  => 'required|unique:users,username',
			'email'     => 'required|unique:users,email',
			'password'  => 'required|min:8|max:60',
			'phone'     => 'required|unique:users,phone',
			'birthday'  => 'required',
			'gender'    => 'required|in:1,2', //Only allow 'M' and 'F' in the combobox
			'building'  => 'required',
			'floor'     => 'required',
			'apartment' => 'required',
			'job'       => 'required',
			'hometown'  => 'required',
			'aboutme'   => 'required',
			'motto'     => 'required'
		];
	}


	/**
	 *
	 * Determine if the user is authorized to make this request
	 *
	 *
	 * @return array
	 */
	public function authorize()
	{
		return true;
	}
}
