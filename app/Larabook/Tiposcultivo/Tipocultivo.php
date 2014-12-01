<?php namespace Larabook\Tiposcultivo;

use Eloquent,Hash;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

    protected $fillable = [];

    protected $table = 'tiposcultivo';

}