<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use App\Models\Users;
use App\Models\Question;

class DeviceController extends Controller
{
	public function __construct()
	{
		// 
	}

	public function getDesktopForm()
	{
		return view('desktop');
	}

	public function getLaptopForm()
	{
		return view('laptop');
	}

	public function getFirstQuestion()
	{
		$category = Input::get('category');
		if($category == "desktop")	$qid = 1;
		else 	$qid = 8;

		$question = Question::where('id', '=', $qid)->first();
		return view('question', array('question' => $question));
	}

	public function submitOption()
	{
		$id = Input::get('id');
		$value = Input::get('value');
		$next_question = '';

		$question = Question::where('id', '=', $id)->first();
		if($value == 'yes')
			$next_question = $question->yes;
		else
			$next_question = $question->no;

		if($next_question)
		{
			$question = Question::where('id', '=', $next_question)->first();
			return view('question', array('question' => $question));
		}
		else
		{
			return view('query_form', array('comment' => $question->comment));
		}
	}

	public function register()
	{
		$name = Input::get('name');
		$email = Input::get('email');
		$query = Input::get('query');
		$category = Input::get('category');

		$user = new Users;
		$user->name = $name;
		$user->email = $email;
		$user->query = $query;
		$user->category = $category;
		$user->save();
		return;
	}
}