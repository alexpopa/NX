<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@showProfile');

Route::get('home', ['as' => 'home_path', 'uses' => 'HomeController@index']);


Route::get ('Profile', 'HomeController@showProfile');


Route::get('logout', function() {
    Auth::logout();
    return Redirect::to('/');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//Route::get('login/fb', function() {
//   $facebook = new Facebook(Config::get('facebook'));
//   $params = array(
//        'redirect_uri' => url('/login/fb/callback'),
//        'scope' => 'email',
//    );
//    return Redirect::away($facebook->getLoginUrl($params));
//});

//Route::get('login/fb/callback', function() {
//    $code = Input::get('code');
//    if (strlen($code) == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');
//    $facebook = new Facebook(Config::get('facebook'));
//    $uid = $facebook->getUser();
//    if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error');
//    $me = $facebook->api('/me');
//    $profile = Profile::whereUid($uid)->first();
//    if (empty($profile)) {
//        $user = new User;
//        $user->name = $me['first_name'].' '.$me['last_name'];
//        $user->email = $me['email'];
//        $user->photo = 'https://graph.facebook.com/'.$me['id'].'/picture?type=large';
//        $user->save();
//        $profile = new Profile();
//        $profile->uid = $uid;
//        $profile->username = $me['name'];
//        $profile = $user->profiles()->save($profile);
//    }
//    $profile->access_token = $facebook->getAccessToken();
//    $profile->save();
//    $user = $profile->user;
//    Auth::login($user);
//    return Redirect::to('/')->with('message', 'Logged in with Facebook');
//});