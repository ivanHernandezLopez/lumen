<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

/**
 * https://laravel.com/docs/7.x/filesystem
 */

class FtpController extends Controller
{
	protected $file = 'file';

	protected $filenametostore;

	public function upload(Request $request)
	{

		if ($request->hasFile($this->file)) {
         
	        $filenamewithextension = $request->file($this->file)->getClientOriginalName();
	 
	        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
	 
	        $extension = $request->file($this->file)->getClientOriginalExtension();
	 
	        $this->filenametostore = $filename . '_' . date('dmYHis') . '.' . $extension;

	        try {

	        	Storage::disk('ftp')->put('Storage/' . $this->filenametostore, fopen($request->file($this->file), 'r+'));

	        	$response = ['message' => 'File Uploaded Sucess!', 'file' => $this->filenametostore];

	        	return response()->json($response, 200);

	        } catch (Exception $e) {

	        	$response = ['message' => 'File Uploaded Failed!', 'error' => $e];

	        	return response()->json($response, 409);
	        }

	    } else {
	    	$response = ['message' => 'Archivo requerido'];

	    	return response()->json($response, 409);
	    }

	}

	public function download()
	{
		return Storage::disk('ftp')->download('Storage/lumen_05032020.png');
	}
}