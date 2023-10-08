<?php

namespace App\Http\Controllers\Users\Partners;

use App\Http\Controllers\Controller;
use App\Http\Requests\Partners\CreatePartnerRequest;
use App\Models\Partner;
use Toastr;


class PartnerController extends Controller
{
    public function store(CreatePartnerRequest $request)
    {
        if (Partner::create($request->validated())) {
            Toastr::success(__('message.success.add'), __('title.toastr.success'));
            return redirect()->back();
        }
        Toastr::error(__('message.fail.add'), __('title.toastr.fail'));

        return redirect()->back();
    }
}
