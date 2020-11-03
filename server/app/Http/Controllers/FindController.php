<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindController extends Controller
{
    public function home()
    {
        return view('tokus.home');
    }
}
