<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RechercheController extends Controller
{
    function show()  {
        return view('recherches/users');
    }
}
