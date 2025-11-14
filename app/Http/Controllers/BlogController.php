<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home Page',
            'message' => 'Selamat datang di halaman Home Laravel!'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About Page',
        ]);
    }
}
