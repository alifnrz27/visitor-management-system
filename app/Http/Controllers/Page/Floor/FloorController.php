<?php

namespace App\Http\Controllers\Page\Floor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    public function index(Request $request)
    {
        // You can add any logic here to handle the dashboard view
        // For example, fetching user data, statistics, etc.

        return view('page.floor.index');
    }

    public function create(Request $request)
    {
        // You can add any logic here to handle the dashboard view
        // For example, fetching user data, statistics, etc.

        return view('page.floor.create');
    }
}
