<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindController extends Controller
{
    public function home()
    {
        return view('tokus.home');
    }

    public function thanks()
    {
        return view('tokus.thanks');
    }
}
