<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function login()
    {
        return view('backend.auth.login');    
    }
}