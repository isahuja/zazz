<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use App\Models\Users;
use Session;
class AdminController extends Controller
{
	public function __construct()
	{
		// 
	}

	public function login()
	{
		return view('login');
	}

	public function loginCheck()
	{
		$name = Input::get('name');
		$password = Input::get('password');

		if($name == 'admin' && $password == 'admin')
		{
			Session::put('admin', 1);
			return redirect('home');
		}
		else
		{
			return redirect('admin');
		}
	}

	public function home()
	{
		if(Session::has('admin'))
		{
			$users = Users::get();
			return view('users', array('users' => $users));
		}
		else
		{
			return redirect('admin');
		}
	}

	public function logout()
	{
		Session::forget('admin');
	}
}