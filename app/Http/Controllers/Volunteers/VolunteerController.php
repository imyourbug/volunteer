<?php

namespace App\Http\Controllers\Volunteers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Volunteers\CreateVolunteerRequest;
use App\Http\Requests\Volunteers\UpdateVolunteerRequest;
use App\Models\VolunteerHour;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Toastr;

class VolunteerController extends Controller
{
    public function index()
    {
        return view('user.volunteer.request');
    }

    public function create(CreateVolunteerRequest $request)
    {
        if ($this->getDiffHour($request->input('start_time'), $request->input('end_time')) <= 0) {
            Toastr::error('End time must be bigger than start time', __('title.toastr.fail'));
            return response()->json([
                'status' => 1,
                'message' => __('message.fail.add')
            ]);
        }
        if (VolunteerHour::create($request->validated())) {
            Toastr::success(__('message.success.add'), __('title.toastr.success'));
            return response()->json([
                'status' => 0,
                'message' => __('message.success.add')
            ]);
        }
        Toastr::error(__('message.fail.add'), __('title.toastr.fail'));

        return response()->json([
            'status' => 1,
            'message' => __('message.fail.add')
        ]);
    }

    public function update(UpdateVolunteerRequest $request)
    {
        $data = $request->validated();
        unset($data['id']);
        if ($this->getDiffHour($request->input('start_time'), $request->input('end_time')) <= 0) {
            // dd(1);
            Toastr::error('End time must be bigger than start time', __('title.toastr.fail'));
            return response()->json([
                'status' => 1,
                'message' => __('message.fail.add')
            ]);
        }
        if (VolunteerHour::where('id', $request->id)->update($data)) {
            Toastr::success(__('message.success.update'), __('title.toastr.success'));
            return response()->json([
                'status' => 0,
                'message' => __('message.success.update')
            ]);
        }
        Toastr::error(__('message.fail.update'), __('title.toastr.fail'));

        return response()->json([
            'status' => 1,
            'message' => __('message.fail.update')
        ]);
    }

    public function delete($id)
    {
        if (VolunteerHour::where('id', $id)->delete()) {
            Toastr::success(__('message.success.delete'), __('title.toastr.success'));
            return response()->json([
                'status' => 0,
                'message' => __('message.success.delete')
            ]);
        }
        Toastr::error(__('message.fail.delete'), __('title.toastr.fail'));

        return response()->json([
            'status' => 1,
            'message' => __('message.fail.delete')
        ]);
    }

    public function getDiffHour($start_time, $end_time)
    {
        $start = explode(':', $start_time);
        $end = explode(':', $end_time);
        $min_of_start = intval($start[0]) * 60 + intval($start[1]);
        $min_of_end = intval($end[0]) * 60 + intval($end[1]);

        return round(($min_of_end - $min_of_start) / 60, 1);
    }
}
