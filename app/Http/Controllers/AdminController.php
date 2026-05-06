<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }

    public function records()
    {
        return view('admin.records');
    }

    public function adoption()
    {
        return view('admin.adoption');
    }

    public function incidentCenter()
    {
        return view('admin.incident_center');
    }
}
