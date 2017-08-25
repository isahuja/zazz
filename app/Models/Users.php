<?php
namespace App\Models;
class Users extends \Eloquent
{
	protected $guarded = array('id');
	protected $table = 'users';
}