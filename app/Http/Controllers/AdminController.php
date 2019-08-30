<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Custom\AdminHelper;

class AdminController extends Controller
{
    
	public function index() {
		if (AdminHelper::redirectAdmin() == true) {
			return redirect(url('/admin/dashboard'));
		}

		return view('admin.login');
	}

	public function login(Request $data) {
		$return_code = AdminHelper::attempt_login($data->email, $data->password);
        if ($return_code == 1) {
            return redirect(url('/admin/dashboard'));
        } elseif ($return_code == 0) {
            return redirect()->back()->with('error', 'Password is incorrect.');
        } elseif ($return_code == -2) {
            return redirect()->back()->with('error', 'You are not authorized.');
        } else {
            return redirect()->back()->with('error', 'There is no account associated with that username.');
        }
	}

}
