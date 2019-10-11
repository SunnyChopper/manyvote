<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Custom\AdminHelper;

class PagesController extends Controller
{
    
	public function index() {
		$page_title = "Home";

		return view('pages.index')->with('page_title', $page_title);
	}

	public function demo() {
		$page_title = "Demo";

		return view('pages.demo')->with('page_title', $page_title);
	}

}
