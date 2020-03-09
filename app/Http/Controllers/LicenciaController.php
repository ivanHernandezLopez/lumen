<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

/*use App\Mail\Register;
use Illuminate\Support\Facades\Mail;*/

use App\Licencia;

class LicenciaController extends Controller
{
	public function index()
	{
		$licencias = Licencia::withTrashed()->paginate();

		return response()->json(['status' => 'success', 'data' => $licencias]);
	}

	public function create(Request $request) {

		$licencia = Licencia::create($request->all());

		return response()->json(['status' => 'success', 'data' => $licencia]);
	}

	public function show($id)
	{
		$licencia = Licencia::find($id);

		return response()->json(['status' => 'success', 'data' => $licencia]);
	}

	public function update(Request $request, $id)
	{
		$licencia = Licencia::find($id);

		$licencia->save();

		return response()->json(['status' => 'success', 'data' => $licencia]);
	}

	public function destroy($id)
	{
		
		$licencia = Licencia::withTrashed()->findOrFail($id);

		if($licencia->deleted_at) {

            $licencia->restore();

        } else {

            $licencia->delete();

        }

		return response()->json(['status' => 'success', 'data' => $licencia]);
	}

}