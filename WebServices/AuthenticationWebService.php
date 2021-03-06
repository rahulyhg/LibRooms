<?php
/**
Copyright 2011-2013 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once(ROOT_DIR . 'lib/WebService/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Authentication/namespace.php');
require_once(ROOT_DIR . 'WebServices/Responses/AuthenticationResponse.php');
require_once(ROOT_DIR . 'WebServices/Requests/AuthenticationRequest.php');
require_once(ROOT_DIR . 'WebServices/Requests/SignOutRequest.php');

class AuthenticationWebService
{
	/**
	 * @var IWebServiceAuthentication
	 */
	private $authentication;

	public function __construct(IRestServer $server, IWebServiceAuthentication $authentication)
	{
		$this->server = $server;
		$this->authentication = $authentication;
	}

	/**
	 * @name Authenticate
	 * @description Authenticates an existing phpScheduleIt user
	 * @request AuthenticationRequest
	 * @response AuthenticationResponse
	 * @return void
	 */
	public function Authenticate()
	{
		/** @var $request AuthenticationRequest */
		$request = $this->server->GetRequest();
		$username = $request->username;
		$password = $request->password;

		Log::Debug('WebService Authenticate for user %s', $username);

		$isValid = $this->authentication->Validate($username, $password);
		if ($isValid)
		{
			Log::Debug('WebService Authenticate, user %s was authenticated', $username);

			$session = $this->authentication->Login($username);
			$this->server->WriteResponse(AuthenticationResponse::Success($this->server, $session));
		}
		else
		{
			Log::Debug('WebService Authenticate, user %s was not authenticated', $username);

			$this->server->WriteResponse(AuthenticationResponse::Failed());
		}
	}

	/**
	 * @name SignOut
	 * @request SignOutRequest
	 * @return void
	 */
	public function SignOut()
	{
		/** @var $request SignOutRequest */
		$request = $this->server->GetRequest();
		$userId = $request->userId;
		$sessionToken = $request->sessionToken;

		Log::Debug('WebService SignOut for userId %s and sessionToken %s', $userId, $sessionToken);

		$this->authentication->Logout($userId, $sessionToken);
	}
}

?>