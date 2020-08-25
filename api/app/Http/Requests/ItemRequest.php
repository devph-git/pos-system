<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ItemRequest extends FormRequest {

    const UNPROCESSABLE_ENTITY = 422;

    public function rules() {
        return [
            'name' => 'required',
            'amount' => 'required',
            'stocks_available' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
          ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), self::UNPROCESSABLE_ENTITY));
    }
}



?>