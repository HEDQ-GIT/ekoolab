<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EkoolabController extends Controller {

    public function index()
    {
        return view('ekoolab.index');
	}

    public function test()
    {
        return view('ekoolab.test');

    }
}
