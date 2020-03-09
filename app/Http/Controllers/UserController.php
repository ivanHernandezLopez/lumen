<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Mail\Register;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
	public function create(Request $request) {

		$data = $request->all();

		$random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');

		$_password = substr($random, 0, 10);
		
		$data['user_password_hash'] = app('hash')->make($_password);

		//try {

			$user = \App\User::create($data);

			Mail::to('van.m285@gmail.com')->send(new Register($user, $_password));

			return response()->json(['status' => 'success', 'data' => $data]);

		/*} catch (\Exception $e) {

			$response = ['message' => 'User Registration Failed!', 'error' => $e];

			return response()->json($response, 409);
		}*/

		
	}

}