<?php

namespace App\Http\Controllers\Page\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // You can add any logic here to handle the dashboard view
        // For example, fetching user data, statistics, etc.

        return view('page.user.index');
    }

    public function create(Request $request)
    {
        // You can add any logic here to handle the dashboard view
        // For example, fetching user data, statistics, etc.

        return view('page.user.create');
    }
}
