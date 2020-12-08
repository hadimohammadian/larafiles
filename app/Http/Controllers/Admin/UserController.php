<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index()
    {
        return view('admin.user.index');

    }



    public function create(){

        return view('admin.user.create');
    }
}
