<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\Product;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::latest()->paginate(5);
    
      return view('search',compact('products'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
