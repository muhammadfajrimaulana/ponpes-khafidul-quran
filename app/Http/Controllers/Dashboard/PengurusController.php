<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

class PengurusController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $pengurus = \App\Models\Pengurus::all();
        return view('dashboard.datapengurus', compact('pengurus'));
    }
}
