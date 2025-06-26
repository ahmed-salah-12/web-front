<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientDashboardController extends Controller
{
    /**
     * Display the patient dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('content.pages.pages-page2'); // Make sure the view name matches your Blade file
    }
}
