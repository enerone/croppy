<?php namespace Larabook\Tiposcultivo;

use Eloquent,Hash;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;

use Illuminate\Auth\UserTrait;

class Tipocultivo extends Eloquent implements  RemindableInterface {

    protected $fillable = ['titulo','descripcion', 'imagen'];

    protected $table = 'tiposcultivo';


    /**
     * Register a new user
     * @param $titulo
     * @param $descripcion
     * @param $imagen
     * @internal param $username
     * @internal param $email
     * @internal param $password
     * @return static
     */
    public static function register($titulo, $descripcion, $imagen )
    {
        $tipocultivo = new static (compact('titulo', 'descripcion', 'imagen'));

        $tipocultivo->raise(new TipocultivoRegistered($tipocultivo));
        return $tipocultivo;
    }


    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        // TODO: Implement getReminderEmail() method.
    }
}
