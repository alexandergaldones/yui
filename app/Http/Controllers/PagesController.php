<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//

	public function index() 
	{
		return view('login');
	}

	public function homepage()
	{
		return view('homepage');
	}

	public function about() 
	{
		$menus = ['Home', 'About', 'Contact Us'];

		return view('pages.about', compact('menus') );
		//->with('key','value')
		//->withKey('value')
	}

	public function login() 
	{
		return view('login_social');
	}

}
