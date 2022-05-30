<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function register_option()
    {
        return view('auth.register-option');
    }

    public function registrasi()
    {
    	$type = $_GET['type'];
        return view('auth.registrasi',compact(['type']));
    }
}
