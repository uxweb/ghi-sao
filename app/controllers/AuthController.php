<?php

class AuthController extends \BaseController {

	/**
	 * Logs-in a user.
	 *
	 * @return Response
	 */
	public function login()
	{
		extract(Input::only(['username', 'password', 'remember']));

        if ( is_null($remember) )
        {
            $remember = false;
        }

        if (Auth::attempt(['username' => $username, 'password' => $password], $remember))
        {
            Session::put('is_obra_selected', false);
            return Redirect::route('obra.index');
        }

        return Redirect::back()->with('login_error', true);
	}

	/**
	 * Logout a user.
	 *
	 * @return Response
	 */
	public function logout()
	{
        Session::flush();
		Auth::logout();
        return Redirect::home();
	}

}