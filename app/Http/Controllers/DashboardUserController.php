<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function dashboard()
    {
        // dd("ok");
        return view('utilisateur.dashboard');
    }
}
