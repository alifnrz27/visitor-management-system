<?php

namespace App\Http\Controllers\Page\Device;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index(Request $request)
    {
        // You can add any logic here to handle the dashboard view
        // For example, fetching user data, statistics, etc.

        return view('page.device.index');
    }

    public function show($id)
    {
        // You can add any logic here to handle the dashboard view
        // For example, fetching user data, statistics, etc.

        return view('page.device.show');
    }

    public function create(Request $request)
    {
        // You can add any logic here to handle the dashboard view
        // For example, fetching user data, statistics, etc.

        return view('page.device.create');
    }
}
