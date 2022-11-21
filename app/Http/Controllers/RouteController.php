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

    public function error_pages()
    {
        return view('pages.error');
    }

    public function Profile_pages()
    {
        return view('pages.Profile');
    }

    public function Admin_login_Auth()
    {
        return view('Auth.Admin_login');
    }

    public function Admin_register_Auth()
    {
        return view('Auth.Admin_Register');
    }


    


}
