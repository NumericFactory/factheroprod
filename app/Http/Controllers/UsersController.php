<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function showFormAfterRegistration() {
    	dd('Hello!');
    }
    public function thanksAfterRegistration() {
    	return view('users.thankyou');
    }
    public function accountValidateAfterRegistration() {
    	return view('users.accountvalidate');
    }
}
