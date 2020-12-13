<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ];
    }


    // public function messages()
    // {
    //     return [
    //         'name.required' => 'وارد کردن نام الزامی است',
    //         'email.required' => 'وارد کردن ایمیل الزامی است',
    //         'email.email' => 'حتما ایمیل وارد کنید',
    //         'password.required' => 'وارد کردن رمز عبور الزامی است',
    //         'password.min' => 'کمترین مقدار 6 می باشد',
    //         'password.max' => 'بیشتربن مقدار 12 می باشد',
    //     ];

    // }
}
