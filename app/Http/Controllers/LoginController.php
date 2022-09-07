<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function login()
    {
        $data = Login::all();
        return view('/data');
    }
}
