<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()   
    {
    $welcome_msg = "Selamat_datang!";
    return 
    view('welcome.index') ->with('welcome_msg',$welcome_msg);
   }
}
