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
    public function Coursepage_View()
    {
        return view('pages.Coursepage');
    }
    public function Coursedetail_View()
    {
        return view('pages.Coursedetail');
    }

    public function Skills()
    {
        return view('Admin.Skills');
    }
}
