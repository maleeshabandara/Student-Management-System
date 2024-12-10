<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the homepage of the Student Management System.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home.layout'); // Ensure 'layout.blade.php' is in the resources/views folder.
    }
}
