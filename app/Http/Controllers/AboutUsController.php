<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AboutUsController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('AboutUs');
    }
}
