<?php

namespace App\Http\Requests\Users;

use App\Http\Requests\BaseRequest;

class RegisterRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email:dns,rfc',
            'password' => 'required|string',
            'gender' => 'required|integer|in:0,1,2',
            'birthdate' => 'required',
        ];
    }
}
