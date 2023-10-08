<?php

namespace App\Http\Requests\Partners;

use App\Http\Requests\BaseRequest;

class CreatePartnerRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email:dns,rfc',
            'phone' => 'required|regex:/^0\d{9}$/',
            'company' => 'required|string',
        ];
    }
}
