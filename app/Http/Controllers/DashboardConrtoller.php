<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardConrtoller extends Controller
{
    public function index()
    {
       return view('admin.contents.dashboard.index');
    }
}
