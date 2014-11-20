<?php


use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;


class RegistrationController extends BaseController {



	private $registrationForm;

	/**
	 * Constructor
	 * @param CommandBus       $commandBus
	 * @param RegistrationForm $registrationForm
	 */
	function __construct(RegistrationForm $registrationForm) {

		$this->registrationForm = $registrationForm;

		$this->beforeFilter('guest');
	}

	/**
	 * Show the form to registrate the user
	 *
	 * @return Response
	 */
	public function create() {
        $timezones = Timezone::all();
		return View::make('registration.create')->withTimezone($timezones);
	}

	public function store() {

		$this->registrationForm->validate(Input::all());

        $user = $this->execute(RegisterUserCommand::class);

		Auth::login($user);

		Flash::message('Glad to have you as a larabook member');

		return Redirect::home();
	}

}
