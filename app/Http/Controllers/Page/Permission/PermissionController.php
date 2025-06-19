<?php

namespace App\Http\Controllers\Page\Permission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(Request $request)
    {
        // You can add any logic here to handle the dashboard view
        // For example, fetching user data, statistics, etc.

        return view('page.permission.index');
    }

    public function create(Request $request)
    {
        // You can add any logic here to handle the dashboard view
        // For example, fetching user data, statistics, etc.

        return view('page.permission.create');
    }
}
