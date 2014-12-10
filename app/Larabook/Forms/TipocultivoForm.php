<?php namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

class TipocultivoForm extends FormValidator{
    /**
     * validation rules for registration form
     * @var arr
     */
    protected $rules = [
        'titulo' => 'required|unique:tipocultivo'

    ];
}