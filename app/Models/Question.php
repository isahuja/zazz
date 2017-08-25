<?php
namespace App\Models;
class Question extends \Eloquent
{
	protected $guarded = array('id');
	protected $table = 'question';
}