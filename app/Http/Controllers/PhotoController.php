<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
        $data = array();
        $data['menu_active']= 5;
        return view('layouts.frontend.partial.photo',$data);
//        return view('home',$data);
    }

}
