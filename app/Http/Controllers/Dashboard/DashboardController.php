<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\Auth;

class DashboardController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $user = Auth::user();
        // Mengarahkan ke view 'dashboard' sambil membawa data user
        return view('dashboard.index', compact('user'));
    }
}
