<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
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

        $user_data = [

            'name' => request()->input('name'),
            'email' => request()->input('email'),
            'password' => request()->input('password'),
            'role' => request()->input('role'),
            'wallet' => request()->input('wallet'),

        ];



        $new_user_object =  User::create($user_data);
        dd($new_user_object);
        

    }
}
