<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function index(){

        $files = File::all();
        return view('admin.File.list',compact('files'))->with(['panel_title' => 'لیست فایل ها']);
    }

    public function create(){

        return view('admin.File.create')->with('panel_title','ایجاد فایل جدید ');
    }
}