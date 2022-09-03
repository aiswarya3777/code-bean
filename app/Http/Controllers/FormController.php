<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FormController extends Controller
{
    function form_insertion(Request $request){
        $name = $request->name;
        $age = $request->age;
        $gender = $request->gender;
        $tos = $request->tos;
        
        DB::table("form")->insert([
            'name' => $name,
            'age' => $age,
            'gender' => $gender,
            'tos_status' =>$tos

        ]);
     return redirect('profile');
    }

    function data_retrive(Request $request){
      
        $name = DB::table("form")->pluck('name')->last();
        return view('profile',['details' => $name]);
    }

    
}
