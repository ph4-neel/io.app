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
    public function index_View()
    {
        return view('admin.dashboard.index');
    }
    public function create_View()
    {
        return view('domain-skill.create');
    }
   



    public function Skills()
    {
        return view('Admin.Skills');
    }

    public function Profile_pages()
    {
        return view('pages.Profile');
    }



    public function blog_details_pages()
    {
        return view('pages.blog_details');
    }
  

    
    public function soft_skills_pages()
    {
        return view('pages.soft_skills');
    }
  


    
    

}
