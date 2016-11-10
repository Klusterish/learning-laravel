<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function home() 
    {
        $people = ['Oleg', 'Hanna', 'Alex'];

        return view('pages.welcome', compact('people'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
