<?php
/*
 * This engine owned and produced by hyipis studio.
 * Visit our website: https://hyip.is/
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

/**
 * /**
 * Class TicketsController
 * @package App\Http\Controllers\Admin
 */
class TicketsController extends AdminController
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('admin.tickets.index');
    }
}
