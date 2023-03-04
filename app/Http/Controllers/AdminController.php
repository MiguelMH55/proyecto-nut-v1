<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return view('adminUsu');
        } else {
           redirect()->route('/login');
        }
        
        
        
        }  
}
