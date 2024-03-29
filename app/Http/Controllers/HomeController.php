<?php namespace App\Http\Controllers;

use Auth;
use View;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	 
	public function index()
	{
		return view('home');
	}
	
	/**
	 * Show the profile page to the authenticated user.
	 *
	 * @return Response
	 */
	 
	public function showProfile()
	{
		$data = array();
	
		if (Auth::check()) {
			$data = Auth::user();
		}
		return View::make('home', array('data'=>$data));
	}

}
