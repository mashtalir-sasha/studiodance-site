<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function test()
    {
        return view('test');
    }

    public function timetable()
    {
        return view('timetable', [
            'timetable' => \App\Models\Timetabe::get(), 
        ]);
    }
}
