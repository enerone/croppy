<?php namespace Larabook\Registration;

class RegisterUserCommand {
	public $username;
	public $email;
	public $password;
    public $user_timezone;
    public $country;


    function __construct($username, $email, $password, $user_timezone, $country) {

		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
        $this->user_timezone = $user_timezone;
        $this->country = $country;

    }
}