<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subplan;

class FrontendController extends Controller
{
    public function index($value='')
    {
    	return view('frontend.index');
    }

    public function blog($value='')
    {
    	return view('frontend.blog');
    }

    public function tvc($value='')
    {
    	return view('frontend.tvc');
    }

    public function package($value='')
    {
    	$subplans=Subplan::all();
    	return view('frontend.package',compact('subplans'));
    }
}
