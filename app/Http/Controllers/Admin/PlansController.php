<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index(){
        $plans  = '';
return view('admin.plan.list',compact('plans'))->with(['panel_title' => 'لیست طرح ها']);



}


public function create(){
    return view('admin.plan.create')->with(['panel_title' => 'ایجاد طرح جدید']);

}

public function store(Request $request){
    $this->validate($request,[
        'plan_title'=>'required',
        'plan_limit_download_count' =>'required',
        'plan_price' =>'required',
        'plan_days_count'=>'required',

    ]);
}


}
