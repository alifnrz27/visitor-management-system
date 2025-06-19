<?php

namespace App\Http\Controllers\Page\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        // You can add any logic here to handle the dashboard view
        // For example, fetching user data, statistics, etc.

        return view('page.profile.index');
    }

    public function changePassword(Request $request)
    {
        // You can add any logic here to handle the dashboard view
        // For example, fetching user data, statistics, etc.

        return view('page.profile.change-password');
    }
}
