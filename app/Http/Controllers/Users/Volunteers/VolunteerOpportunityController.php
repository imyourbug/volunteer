<?php

namespace App\Http\Controllers\Users\Volunteers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Volunteers\CreateVolunteerOpportunityRequest;
use App\Models\VolunteerOpportunity;
use Toastr;

class VolunteerOpportunityController extends Controller
{
    public function request()
    {
        return view('user.volunteer.request');
    }

    public function store(CreateVolunteerOpportunityRequest $request)
    {
        if (VolunteerOpportunity::create($request->validated())) {
            Toastr::success(__('message.success.add'), __('title.toastr.success'));
            return redirect()->back();
        }
        Toastr::error(__('message.fail.add'), __('title.toastr.fail'));

        return redirect()->back();
    }
}
