<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FileController extends Controller {

	
	public function index($filename)
	{
		// $entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
		$file = \Storage::disk('local')->get($filename);
 
		return response()->download($filename);
	}

}
