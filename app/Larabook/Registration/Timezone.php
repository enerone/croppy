<?php namespace Larabook\Registration;

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Eloquent,Hash;
use Larabook\Registration\Events\UserRegistered;
use Larabook\Users\FollowableTrait;
use Laracasts\Commander\Events\EventGenerator;
use Laracasts\Presenter\PresentableTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {
    use UserTrait, RemindableTrait, EventGenerator, PresentableTrait, FollowableTrait;

    protected $table = 'timezones';



}