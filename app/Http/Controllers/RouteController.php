<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //
    public function Homepage_View()
    {
        return view('pages.Homepage');
    }
}
