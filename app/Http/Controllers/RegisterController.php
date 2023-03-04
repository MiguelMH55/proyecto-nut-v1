<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\usuario;
use Illuminate\Console\View\Components\Alert;

class RegisterController extends Controller
{
    //
    public function show(){
        return  view('auth.register');
    }

    public function register(RegisterRequest $request){
        $users = usuario:: create($request->validated());
        return redirect('/login')->with('success', 'Cuenta creada correctamente');
    } 
        
}