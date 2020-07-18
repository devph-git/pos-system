<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRegisterRequest extends FormRequest {
    const UNPROCESSABLE_ENTITY = 422;

    public function rules() {
        return  [ 
            "name"=> 'required',
            "email" =>'required|email|unique:users',
            "password" => 'required',
            "confirm_password" => 'required|same:password',     
        ];
    }

    protected function failedValidation(Validator $validator) {
        
        throw new HttpResponseException(response()->json($validator->errors(), self::UNPROCESSABLE_ENTITY));
    }
}

?>