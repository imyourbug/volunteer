<?php

namespace App\Http\Requests\Volunteers;

use App\Http\Requests\BaseRequest;

class CreateVolunteerRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'organization' => 'required|string',
            'name' => 'required|string',
            'phone' => 'nullable|string|regex:/^0\d{9}$/',
            'email' => 'nullable|email:dns,frc',
            'date' => 'required|date',
            'service_type_id' => 'required|string',
            'start_time' => 'required|string',
            'end_time' => 'required|string',
            'description' => 'required|string',
            'user_id' => 'required|integer',
        ];
    }
}
