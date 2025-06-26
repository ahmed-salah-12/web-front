<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lifelinehomepage extends Controller
{
    /**
     * Display the patient dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('content.pages.pages-lifeline'); // Make sure the view name matches your Blade file
    }
}
