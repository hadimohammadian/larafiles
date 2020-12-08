<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index()
    {
        return view('admin.user.index')->with(['panel_title'=>'لیست کاربران']);

    }



    public function create(){

        return view('admin.user.create')->with(['panel_title'=>'ثبت کاربران']);
    }

    public function store(){

dd('sdfsd');
    }
}
