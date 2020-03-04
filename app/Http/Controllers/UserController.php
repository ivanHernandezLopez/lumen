<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
	public function create(Request $request) {

		$data = $request->all();
		
		$data['password'] = app('hash')->make($data['password']);

		try {

			$user = \App\User::create($data);

			return response()->json(['status' => 'success', 'data' => $data]);

		} catch (\Exception $e) {

			$response = ['message' => 'User Registration Failed!', 'error' => $e];

			return response()->json($response, 409);
		}
		
	}

	public function profile() {

		$this->middleware('auth');

		return response()->json(['user' => Auth::user()], 200);
	}
}