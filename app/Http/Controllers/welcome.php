<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
* 
*/
class welcome extends Controller
{
	
	public function index(Request $request)
    {
        return view('Front.index');
    }
}

?>