<?php

namespace App\Http\Controllers;

use App\Custom\AdminHelper;

use Illuminate\Http\Request;

class RepsController extends Controller
{
    
	/* ---------------------------- *\
		Admin Views
	\* ---------------------------- */

	public function admin_view() {
		// if (AdminHelper::isAuthorized() == false) {
		// 	return redirect(url('/admin'));
		// }

		$page_title = "Representatives";

		return view('admin.reps.view')->with('page_title', $page_title);
	}

}
