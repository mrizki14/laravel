<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('contents.dashboard.index');
    }

    public function users() {
        return "duar";
    }
}
