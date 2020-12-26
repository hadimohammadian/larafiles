<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Symfony\Component\VarDumper\Cloner\Data;

class FilesController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('admin.File.list', compact('files'))->with(['panel_title' => 'لیست فایل ها']);
    }

    public function create()
    {
        return view('admin.File.create')->with('panel_title', 'ایجاد فایل جدید ');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file_title' => 'required',
            'fileItem' => 'required'
        ], [
            'file_title.required' => 'وارد کردن نام فایل الزامی است',
            'fileItem.required' => 'وارد کردن فایل الزامی است',
        ]);

        $new_file_data = [

             'file_title' => $request->input('file_title'),
                'file_description' => $request->input('file_description'),
                'file_type' => $request->file('fileItem')->getMimeType(),
                'file_size' => $request->file('fileItem')->getSize(),

            ];
        // $request->file('fileItem')->store('files/image');

        $file_extention = $request->file('fileItem')->getClientOriginalExtension();
       // $time = Carbon::now()->format('Y/m/d-H:i:s') ;
       $time = '';


        $file_hash_name = Str::random(40);
        $new_file_name = $file_hash_name.'-'. $time  .'.'. $file_extention;


        // $request->file('fileItem')->storeAs('images', $new_file_name);

    $request->file('fileItem')->move(public_path('Upload_Images'),$new_file_name);


    }
}
