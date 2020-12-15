<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index()
    {
        $allusers = User::all();
        // return view('admin.user.index')->with(['panel_title'=>'لیست کاربران','user'=>$users]);
        return view('admin.user.index',compact('allusers'))->with(['panel_title'=>'لیست کاربران']);

    }



    public function create(){

        return view('admin.user.create')->with(['panel_title'=>'ثبت کاربران']);
    }

    public function store(UserRequest $userRequest){

        // $this->validate(request(),[

        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|min:6|max:12',

        // ]
        // ,[
        //     'name.required' => 'وارد کردن نام الزامی است',
        //     'email.required' => 'وارد کردن ایمیل الزامی است',
        //     'email.email' => 'حتما ایمیل وارد کنید',
        //     'password.required' => 'وارد کردن رمز عبور الزامی است',
        //     'password.min' => 'کمترین مقدار 6 می باشد',
        //     'password.max' => 'بیشتربن مقدار 12 می باشد',

        // ]
// );

        $user_data = [

            'name' => $userRequest->input('name'),
            'email' => $userRequest->input('email'),
            'password' => $userRequest->input('password'),
            'role' => $userRequest->input('role'),
            'wallet' => $userRequest->input('wallet'),

        ];



        $new_user_object =  User::create($user_data);
        // dd($new_user_object);
        if($new_user_object instanceof User){
            return redirect()->route('admin.users.list')->with('success',true);
        }


    }

    public function delete($user_id){

        if($user_id && ctype_digit($user_id)){

            $userItem = User::find($user_id);
            if($userItem instanceof User){
                $userItem->delete();
            }
            return redirect()->route('admin.users.list')->with('deleted',true);
        }


    }


    public function edit($user_id){
        if ($user_id && ctype_digit($user_id)) {
            $userItem = User::find($user_id);
            if ($userItem instanceof User && $userItem) {
                return view('admin.user.edit', compact('userItem'))->with(['panel_title'=>'ویرایش کاربران']);
            }
        }
    }


    public function update($user_id,UserRequest $userRequest){


       // $inputs = request()->except('_token');
       $inputs = [

        'name' => $userRequest->input('name'),
        'email' => $userRequest->input('email'),
        'password' => $userRequest->input('password'),
        'role' => $userRequest->input('role'),
        'wallet' => $userRequest->input('wallet'),

    ];

     
        // if(empty(request()->input('password'))){
        if(!($inputs['password'])){
            unset($inputs['password']);
        }
         $userItem = User::find($user_id);
         $userItem->update($inputs);
         return redirect()->back()->with('success',true);

    }
}
