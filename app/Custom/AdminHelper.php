<?php

namespace App\Custom;

use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminHelper {
	
	public static function redirectAdmin() {
		if (!Auth::guest()) {
			if (Auth::user()->backend_auth == 1) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public static function attempt_login($email, $password) {
		if (User::where('email', strtolower($email))->count() > 0) {
			$user = User::where('email', strtolower($email))->first();
			if ($user->backend_auth > 0) {
				if (Hash::check($password, $user->password) == true) {
					Auth::login($user);
					return 1;
				} else {
					return 0;
				}
			} else {
				return -2;
			}
		} else {
			return -1;
		}
	}

	public static function isAuthorized() {
		if (!Auth::guest()) {
			if (Auth::user()->backend_auth == 1) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public static function getFirstName() {
		return Auth::user()->first_name;
	}

	public static function getID() {
		return Auth::user()->id;
	}

}

?>