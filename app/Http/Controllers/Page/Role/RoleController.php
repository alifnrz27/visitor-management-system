<?php

namespace App\Http\Controllers\Page\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        // You can add any logic here to handle the dashboard view
        // For example, fetching user data, statistics, etc.

        return view('page.role.index');
    }

    public function create(Request $request)
    {
        // You can add any logic here to handle the dashboard view
        // For example, fetching user data, statistics, etc.

        return view('page.role.create');
    }
}
