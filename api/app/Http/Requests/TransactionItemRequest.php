<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class TransactionItemRequest extends FormRequest {
    
    const UNPROCESSABLE_ENTITY = 422;

    public function rules() {
        return [
             'transaction_id' =>'required',
             'user_id' => 'required',
             'item_id' => 'required',
             'quantity' => 'required',
             'created_at' => 'now()',
             'updated-at' => 'now()',
          ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), self::UNPROCESSABLE_ENTITY));
    }
}



?>