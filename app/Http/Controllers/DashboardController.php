<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Process dataTable ajax response.
     *
     * @param \Yajra\Datatables\Datatables $datatables
     * @return \Illuminate\Http\JsonResponse
     */
    public function users(Datatables $datatables)
    {
        return $datatables->eloquent(User::query())
          ->editColumn('photo', function ($user) {
            if ($user->photo) {
                return '<img src="' . asset('uploads/images/' . $user->photo) . '" width="50" alt="' . $user->name . '" />';
            }
            return null;
          })
          ->rawColumns(['name', 'photo'])
          ->make(true);
    }
}
