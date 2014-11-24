<?php


use Larabook\Forms\RegistrationForm;
use Larabook\Registration\Country;
use Larabook\Registration\RegisterUserCommand;
use Larabook\Registration\Timezone;



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
        $countries = Country::all();
       // $timezones = DB::table('timezones')->get();

        $options = array();

        foreach ($timezones as $tz)
        {
            $options[$tz->id] =  $tz->gmt.' | '.  $tz->timezone_location;
        }

        $paises = array();

        foreach ($countries as $ct)
        {
            $paises[$ct->Code] =  $ct->Name;
        }

        return View::make('registration.create')->withTimezones($options)->withCountries($paises);


		//return View::make('registration.create')->withTimezones($timezones);
	}

	public function store() {

		$this->registrationForm->validate(Input::all());

        $user = $this->execute(RegisterUserCommand::class);

		Auth::login($user);

		Flash::message('Glad to have you as a larabook member');

		return Redirect::home();
	}

}
