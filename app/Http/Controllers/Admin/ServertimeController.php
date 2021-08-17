<?php
/*
 * This engine owned and produced by hyipis studio.
 * Visit our website: https://hyip.is/
 */

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;

/**
 * Class ServertimeController
 * @package App\Http\Controllers\Admin
 */
class ServertimeController extends AdminController
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request)
    {
        $servertime = $request->servertime;
        Setting::setValue('timezone', $servertime);
        session()->flash('success', __('server_time_changed_to').' '.$servertime);
        return back();
    }
}
