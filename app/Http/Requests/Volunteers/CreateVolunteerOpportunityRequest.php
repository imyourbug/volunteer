<?php

namespace App\Http\Requests\Volunteers;

use App\Http\Requests\BaseRequest;

class CreateVolunteerOpportunityRequest extends BaseRequest
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
            'organization_name' => 'required|string',
            'organization_type' => 'required|integer|in:0,1,2',
        ];
    }
}
