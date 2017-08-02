<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.index', compact('users'));
    }
}
