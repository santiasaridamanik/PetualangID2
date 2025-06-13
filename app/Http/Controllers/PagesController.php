<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show the home page.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Show the about page.
     */
    public function tentang()
    {
        return view('pages.tentang');
    }

    /**
     * Show the destinations page.
     */
    public function destinasi()
    {
        return view('pages.destinasi');
    }

    /**
     * Show the contact page.
     */
    public function kontak()
    {
        return view('pages.kontak');
    }
}
