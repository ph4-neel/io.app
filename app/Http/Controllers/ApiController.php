<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\AdminAuth;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    public function get_SoftSkills()
    {


        $posts = AdminAuth::all();

        return response()->json([
            'soft_Skills' => $posts
        ], 200);
    }

    public function GetHardSkills()
    {

        $posts = AdminAuth::all();

        return response()->json([
            'hard_skills' => $posts
        ], 200);
    }


    public function StoreUser(StoreUser $request)
    {


        $posts = AdminAuth::create($request->all());

        return response()->json(['users' => $posts], 200);
    }

    public function getApiById(Request $id)
    {
        $data = AdminAuth::find($id);
            // $data= Customer::find([$email]);


            if(!$data){
                return response()->json([

                    'message' => 'post not found'

                ],404);
            }

            return response()->json([
               'customers'=> $data
            ],200);
    }
}
