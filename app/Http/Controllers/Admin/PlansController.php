<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;

use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index(){
        $plans  = Plan::all();
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

    $new_plan = Plan::create([
        'plan_title'=>$request->input('plan_title'),
        'plan_limit_download_count' =>$request->input('plan_limit_download_count'),
        'plan_price' =>$request->input('plan_price'),
        'plan_days_count'=>$request->input('plan_days_count'),
    ]);


    if($new_plan){
        return redirect()->route('admin.plan.list')->with('success','اطلاعات طرح جدید با موفقیت ثبت گردید');
    }
}


}
