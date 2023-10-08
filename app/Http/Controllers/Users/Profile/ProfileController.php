<?php

namespace App\Http\Controllers\Users\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\Profile\UpdateDetailRequest;
use App\Http\Requests\Users\Profile\UpdateParentRequest;
use App\Models\DetailInfo;
use App\Models\Guardian;
use App\Models\ServiceType;
use App\Models\VolunteerHour;
use Illuminate\Support\Facades\Auth;
use Toastr;
use Yajra\Datatables\Datatables;

class ProfileController extends Controller
{
    public function index()
    {
        $service_types = ServiceType::all();

        return view('user.profile.index', [
            'title' => '',
            'service_types' => $service_types,
        ]);
    }

    public function detail()
    {
        $service_types = ServiceType::all();
        $id = Auth::id();
        $detail = DetailInfo::firstWhere('user_id', $id);

        return view('user.info.detail', [
            'title' => '',
            'service_types' => $service_types,
            'detail' => $detail,
        ]);
    }

    public function parent()
    {
        $id = Auth::id();
        $parent = Guardian::firstWhere('user_id', $id);

        return view('user.info.parent', [
            'title' => '',
            'parent' => $parent,
        ]);
    }

    public function award()
    {
        $service_types = ServiceType::all();

        return view('user.log.award', [
            'title' => '',
            'service_types' => $service_types,
        ]);
    }

    public function mylog()
    {
        $id = Auth::id();
        $volunteer_hours = VolunteerHour::where('user_id', $id)->get();
        $service_types = ServiceType::all();

        return view('user.log.index', [
            'title' => '',
            'volunteer_hours' => $volunteer_hours,
            'service_types' => $service_types,
        ]);
    }

    public function getLogData()
    {
        $id = Auth::id();
        $volunteer_hours = VolunteerHour::where('user_id', $id)->get();

        return Datatables::of($volunteer_hours)
            ->make(true);
    }

    public function mycause()
    {
        $service_types = ServiceType::all()->toArray();
        $id = Auth::id();
        $volunteer_hours = VolunteerHour::with('service_type')->where('user_id', $id)->get()->toArray();
        // dd($volunteer_hours, $service_types); 

        return view('user.log.cause', [
            'title' => '',
            'service_types' => $service_types,
            'volunteer_hours' => $volunteer_hours,
        ]);
    }

    public function update(UpdateDetailRequest $request)
    {
        $id = Auth::id();
        $rs = DetailInfo::firstWhere('user_id', $id)->update($request->validated());
        if ($rs) {
            Toastr::success(__('message.success.update'), __('title.toastr.success'));
            return response()->json([
                'status' => 0,
                'message' => __('message.success.update')
            ]);
        }
        Toastr::success(__('message.fail.update'), __('title.toastr.fail'));

        return response()->json([
            'status' => 1,
            'message' => __('message.fail.update')
        ]);
    }

    public function parent_update(UpdateParentRequest $request)
    {
        $id = Auth::id();
        $rs = Guardian::updateOrCreate(
            ['user_id' => $id],
            $request->validated()
        );
        if ($rs) {
            Toastr::success(__('message.success.update'), __('title.toastr.success'));
            return response()->json([
                'status' => 0,
                'message' => __('message.success.update')
            ]);
        }
        Toastr::success(__('message.fail.update'), __('title.toastr.fail'));

        return response()->json([
            'status' => 1,
            'message' => __('message.fail.update')
        ]);
    }

    public function getLogById($id) {
        return response()->json([
            'status' => 0,
            'log' => VolunteerHour::firstWhere('id', $id)
        ]);
    }
}
