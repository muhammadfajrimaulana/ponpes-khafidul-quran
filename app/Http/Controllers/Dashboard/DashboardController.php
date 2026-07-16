<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\Auth;
use App\Models\Santri;

class DashboardController extends \App\Http\Controllers\Controller
{
    protected $santriModel;
    public function index()
    {
        $user = Auth::user();
        $santri = Santri::all();

        // Mengarahkan ke view 'dashboard' sambil membawa data user
        return view('dashboard.index', compact('user', 'santri'));
    }
}
