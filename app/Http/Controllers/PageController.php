<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('landing_page.homepage');
    }

    public function event()
    {
        return view('landing_page.event');
    }

    public function news()
    {
        return view('landing_page.news');
    }

    public function speaker()
    {
        return view('landing_page.speaker');
    }

    public function contact()
    {
        return view('landing_page.contact');
    }
}
