<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
  public function __construct()
{
    $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
}
}
