<?php

namespace App\Http\ViewComposers;

use App\Models\VolunteerHour;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class VolunteerHourComposer
{
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __contimeuct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $id = Auth::id();
        $mins = 0;
        if ($id) {
            $volunteer_hours = VolunteerHour::where('user_id', $id)->get();
            foreach ($volunteer_hours as $v) {
                $mins += $this->convertStrToMin($v->end_time) - $this->convertStrToMin($v->start_time);
            }
        }
        $rs = (round($mins / 60) > 0 ? (round($mins / 60) . 'h')  : '') . ($mins % 60 > 0 ? ($mins % 60) . 'm' : '');
        //
        $all_min = 0;

        $all = VolunteerHour::get();
        foreach ($all as $v) {
            $all_min += $this->convertStrToMin($v->end_time) - $this->convertStrToMin($v->start_time);
        }
        $total = round($all_min / 60);

        $view->with('hour', $rs);
        $view->with('total', $total);
    }

    public function convertStrToMin($time)
    {
        $mins = explode(':', $time);
        return intval($mins[0]) * 60 + intval($mins[1]);
    }
}
