<?php namespace Larabook\Registration;

class RegisterUserCommand {
	public $username;
	public $email;
	public $password;
    public $user_timezone;
    private $pais;
    private $provincia;

    function __construct($username, $email, $password, $user_timezone, $pais, $provincia) {

		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
        $this->user_timezone = $user_timezone;
        $this->pais = $pais;
        $this->provincia = $provincia;
    }
}